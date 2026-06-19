@extends('layouts.dashboard')

@section('title', 'Vendor Dashboard — LotusRise Global')
@section('page_title', 'Vendor Overview')

@section('content')
<div class="space-y-8">
    
    <!-- Status Banner -->
    <div class="bg-[#13110E] p-6 rounded-2xl border border-[#C5A85A]/20 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <div>
            <h2 class="text-xl font-bold">Hello, {{ $vendor->business_name }}!</h2>
            <p class="text-xs text-[#FAF8F5]/60 mt-1">Manage wholesale collections, check inventories, and dispatch upcountry regional orders.</p>
        </div>
        <span class="text-xs px-3.5 py-1.5 rounded-full bg-emerald-500/10 text-emerald-400 font-bold border border-emerald-500/20">
            <i class="fa-solid fa-circle-check mr-1.5"></i>Approved Supplier
        </span>
    </div>

    <!-- KPIs Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        
        <!-- Products -->
        <div class="bg-[#13110E] p-6 rounded-2xl border border-[#FAF8F5]/10 space-y-4">
            <div class="flex justify-between items-center">
                <span class="text-xs text-[#FAF8F5]/60 font-semibold uppercase tracking-wider">Total Products</span>
                <i class="fa-solid fa-boxes-stacked text-[#C5A85A]"></i>
            </div>
            <div class="space-y-1">
                <span class="text-3xl font-extrabold">{{ $total_products }}</span>
                <p class="text-[10px] text-gray-500">Active catalog items</p>
            </div>
        </div>

        <!-- Active Orders -->
        <div class="bg-[#13110E] p-6 rounded-2xl border border-[#FAF8F5]/10 space-y-4">
            <div class="flex justify-between items-center">
                <span class="text-xs text-[#FAF8F5]/60 font-semibold uppercase tracking-wider">Active Orders</span>
                <i class="fa-solid fa-receipt text-[#C5A85A]"></i>
            </div>
            <div class="space-y-1">
                <span class="text-3xl font-extrabold">{{ $active_orders }}</span>
                <p class="text-[10px] text-gray-500">Awaiting shipment dispatch</p>
            </div>
        </div>

        <!-- Revenue -->
        <div class="bg-[#13110E] p-6 rounded-2xl border border-[#FAF8F5]/10 space-y-4">
            <div class="flex justify-between items-center">
                <span class="text-xs text-[#FAF8F5]/60 font-semibold uppercase tracking-wider">Approved Revenue</span>
                <i class="fa-solid fa-wallet text-[#C5A85A]"></i>
            </div>
            <div class="space-y-1">
                <span class="text-3xl font-extrabold text-emerald-400">{{ $revenue }}</span>
                <p class="text-[10px] text-gray-500">Delivered escrow payouts</p>
            </div>
        </div>

    </div>

    <!-- Recent Orders Table -->
    <div class="bg-[#13110E] p-6 rounded-2xl border border-[#FAF8F5]/10 space-y-4">
        <div class="flex justify-between items-center">
            <span class="text-sm font-bold uppercase tracking-wider">Recent Orders</span>
            <a href="{{ route('vendor.orders') }}" class="text-xs text-[#C5A85A] hover:underline">View All</a>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs border-collapse">
                <thead>
                    <tr class="border-b border-[#FAF8F5]/10 text-[#FAF8F5]/40 font-bold uppercase tracking-wider">
                        <th class="py-3 px-4">Order ID</th>
                        <th class="py-3 px-4">Customer Details</th>
                        <th class="py-3 px-4">Items Ordered</th>
                        <th class="py-3 px-4">Total Price</th>
                        <th class="py-3 px-4">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#FAF8F5]/5">
                    @foreach($orders as $order)
                        <tr class="hover:bg-[#FAF8F5]/5 transition duration-150">
                            <td class="py-4 px-4 font-bold text-[#C5A85A]">#{{ $order->id }}</td>
                            <td class="py-4 px-4">{{ $order->customer_name }}</td>
                            <td class="py-4 px-4">{{ $order->items }}</td>
                            <td class="py-4 px-4 font-semibold text-emerald-400">{{ number_format($order->total) }} TZS</td>
                            <td class="py-4 px-4">
                                <span class="px-2.5 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider
                                    @if($order->status === 'Pending') bg-yellow-500/10 text-yellow-400 border border-yellow-500/20
                                    @elseif($order->status === 'Dispatched') bg-blue-500/10 text-blue-400 border border-blue-500/20
                                    @else bg-emerald-500/10 text-emerald-400 border border-emerald-500/20
                                    @endif">
                                    {{ $order->status }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
