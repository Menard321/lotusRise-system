@extends('layouts.dashboard')

@section('title', 'Inventory Monitoring — LotusRise Global')
@section('page_title', 'Inventory Monitoring')

@section('content')
<div class="space-y-8">

    <div>
        <h2 class="text-sm font-bold uppercase tracking-wider text-[#FAF8F5]/60">Stock Levels & Alerts</h2>
        <p class="text-xs text-[#FAF8F5]/40 mt-0.5">Ensure bulk catalogs remain populated to prevent order cancellation.</p>
    </div>

    <!-- Inventory Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        
        <!-- Low Stock Alert Box -->
        <div class="bg-rose-500/10 border border-rose-500/20 p-6 rounded-2xl space-y-4">
            <div class="flex items-center gap-3 text-rose-400">
                <i class="fa-solid fa-triangle-exclamation text-xl"></i>
                <h3 class="font-bold text-sm">Critical Stock Alert</h3>
            </div>
            <p class="text-xs text-rose-400/80 leading-relaxed">
                The following products are out of stock or running low. Please update stock values immediately:
            </p>
            <ul class="list-disc list-inside text-xs text-rose-400/70 space-y-1">
                @forelse($products->filter(fn($p) => $p->stock <= 15) as $prod)
                    <li>{{ $prod->name }} ({{ $prod->stock }} units left)</li>
                @empty
                    <li>All products have adequate stock levels. ✓</li>
                @endforelse
            </ul>
        </div>

        <!-- Inventory Metrics -->
        <div class="bg-[#13110E] p-6 rounded-2xl border border-[#FAF8F5]/10 space-y-4">
            <h3 class="font-bold text-sm text-[#C5A85A] uppercase tracking-wider">Inventory Breakdown</h3>
            <div class="space-y-3 text-xs">
                <div class="flex justify-between items-center py-2 border-b border-[#FAF8F5]/5">
                    <span>Total In-Stock Items</span>
                    <span class="font-bold text-[#FAF8F5]">{{ $products->where('stock', '>', 0)->count() }} items</span>
                </div>
                <div class="flex justify-between items-center py-2 border-b border-[#FAF8F5]/5">
                    <span>Total Low-Stock Items</span>
                    <span class="font-bold text-yellow-400">{{ $products->filter(fn($p) => $p->stock > 0 && $p->stock <= 15)->count() }} items</span>
                </div>
                <div class="flex justify-between items-center py-2">
                    <span>Out of Stock</span>
                    <span class="font-bold text-rose-500">{{ $products->where('stock', 0)->count() }} items</span>
                </div>
            </div>
        </div>

    </div>

    <!-- Inventory Stock Table -->
    <div class="bg-[#13110E] p-6 rounded-2xl border border-[#FAF8F5]/10">
        @if($products->isEmpty())
            <div class="text-center py-12 text-[#FAF8F5]/30">
                <i class="fa-solid fa-warehouse text-3xl mb-3"></i>
                <p class="text-sm">No products in catalog yet. Add products from the Products section.</p>
            </div>
        @else
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs border-collapse">
                <thead>
                    <tr class="border-b border-[#FAF8F5]/10 text-[#FAF8F5]/40 font-bold uppercase tracking-wider">
                        <th class="py-3 px-4">Item ID</th>
                        <th class="py-3 px-4">Product Name</th>
                        <th class="py-3 px-4">Category</th>
                        <th class="py-3 px-4">Stock Level</th>
                        <th class="py-3 px-4">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#FAF8F5]/5">
                    @foreach($products as $prod)
                        <tr class="hover:bg-[#FAF8F5]/5 transition duration-150">
                            <td class="py-4 px-4 font-bold text-[#C5A85A]">#{{ $prod->id }}</td>
                            <td class="py-4 px-4 font-semibold">{{ $prod->name }}</td>
                            <td class="py-4 px-4 text-gray-400">{{ $prod->category }}</td>
                            <td class="py-4 px-4 font-bold
                                @if($prod->stock == 0) text-rose-500
                                @elseif($prod->stock <= 15) text-yellow-400
                                @else text-emerald-400
                                @endif">
                                {{ $prod->stock }} units
                            </td>
                            <td class="py-4 px-4">
                                <span class="px-2 py-0.5 rounded-full text-[9px] font-bold uppercase tracking-wider
                                    @if($prod->stock == 0) bg-rose-500/10 text-rose-400 border border-rose-500/20
                                    @elseif($prod->stock <= 15) bg-yellow-500/10 text-yellow-400 border border-yellow-500/20
                                    @else bg-emerald-500/10 text-emerald-400 border border-emerald-500/20
                                    @endif">
                                    @if($prod->stock == 0) Out of Stock
                                    @elseif($prod->stock <= 15) Low Stock
                                    @else In Stock
                                    @endif
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>

</div>
@endsection
