<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vendor;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class VendorController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'business_name'        => 'required|string|max:255',
            'owner_name'           => 'required|string|max:255',
            'tin'                  => 'required|string|max:50',
            'vrn'                  => 'nullable|string|max:50',
            'phone_number'         => 'required|string|max:50',
            'email'                => 'required|email|max:255|unique:users,email',
            'location'             => 'required|string|max:255',
            'business_category'    => 'required|string|max:255',
            'website'              => 'nullable|url|max:255',
            'business_description' => 'required|string',
            'password'             => 'required|string|min:6',
        ]);

        $user = User::create([
            'name'     => $request->business_name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => 'vendor',
        ]);

        Vendor::create([
            'user_id'              => $user->id,
            'business_name'        => $request->business_name,
            'owner_name'           => $request->owner_name,
            'tin'                  => $request->tin,
            'vrn'                  => $request->vrn,
            'phone_number'         => $request->phone_number,
            'email'                => $request->email,
            'location'             => $request->location,
            'business_category'    => $request->business_category,
            'website'              => $request->website,
            'business_description' => $request->business_description,
            'status'               => 'pending',
        ]);

        return redirect()->route('login')->with('success', 'Your registration has been submitted and is under review. You will receive confirmation once approved by our admin team.');
    }

    /*
    |--------------------------------------------------------------------------
    | Vendor Dashboard
    |--------------------------------------------------------------------------
    */
    public function dashboard()
    {
        $vendor = auth()->user()->vendor;

        if (!$vendor || $vendor->status !== 'approved') {
            Auth::logout();
            $status = $vendor ? $vendor->status : 'inactive';
            return redirect()->route('login')->with('error', "Your vendor account is currently {$status}. Please wait for administrator approval.");
        }

        $products      = $vendor->products()->latest()->get();
        $orders        = $vendor->orders()->latest()->get();
        $revenue       = $vendor->orders()->where('status', 'Delivered')->sum('total');
        $activeOrders  = $vendor->orders()->whereIn('status', ['Pending', 'Dispatched'])->count();

        return view('vendor.dashboard', [
            'vendor'         => $vendor,
            'total_products' => $products->count(),
            'active_orders'  => $activeOrders,
            'revenue'        => number_format($revenue) . ' TZS',
            'orders'         => $orders->take(5),
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | Products (real DB)
    |--------------------------------------------------------------------------
    */
    public function products()
    {
        $vendor   = auth()->user()->vendor;
        $products = $vendor->products()->latest()->get();

        return view('vendor.products', compact('products'));
    }

    public function saveProduct(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'category' => 'required|string',
            'price'    => 'required|numeric|min:0',
            'stock'    => 'required|integer|min:0',
        ]);

        $vendor = auth()->user()->vendor;

        Product::create([
            'vendor_id' => $vendor->id,
            'name'      => $request->name,
            'category'  => $request->category,
            'price'     => $request->price,
            'stock'     => $request->stock,
            'status'    => $request->stock > 0 ? 'In Stock' : 'Out of Stock',
        ]);

        return back()->with('success', 'Product listed successfully.');
    }

    /*
    |--------------------------------------------------------------------------
    | Orders (real DB)
    |--------------------------------------------------------------------------
    */
    public function orders()
    {
        $vendor = auth()->user()->vendor;
        $orders = $vendor->orders()->latest()->get();

        return view('vendor.orders', compact('orders'));
    }

    public function updateOrderStatus(Request $request, $id)
    {
        $request->validate(['status' => 'required|string|in:Pending,Dispatched,Delivered,Cancelled']);

        $vendor = auth()->user()->vendor;
        $order  = $vendor->orders()->findOrFail($id);
        $order->update(['status' => $request->status]);

        return back()->with('success', 'Order status updated to ' . $request->status . '.');
    }

    /*
    |--------------------------------------------------------------------------
    | Inventory
    |--------------------------------------------------------------------------
    */
    public function inventory()
    {
        $vendor   = auth()->user()->vendor;
        $products = $vendor->products()->latest()->get();

        return view('vendor.inventory', compact('products'));
    }
}
