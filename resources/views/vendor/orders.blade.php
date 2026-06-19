@extends('layouts.dashboard')

@section('title', 'Wholesale Orders — LotusRise Global')
@section('page_title', 'Wholesale Orders Management')

@section('content')
<div class="space-y-8">

    <div>
        <h2 class="text-sm font-bold uppercase tracking-wider text-[#FAF8F5]/60">Incoming Wholesale Purchases</h2>
        <p class="text-xs text-[#FAF8F5]/40 mt-0.5">Track shipment states and update dispatch statuses for upcountry logistics carriers.</p>
    </div>

    {{-- Success Alerts --}}
    @if(session('success'))
        <div class="bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs font-semibold px-4 py-3 rounded-xl">
            <i class="fa-solid fa-circle-check mr-2"></i>{{ session('success') }}
        </div>
    @endif

    <!-- Orders Card List -->
    <div class="bg-[#13110E] p-6 rounded-2xl border border-[#FAF8F5]/10">
        @if($orders->isEmpty())
            <div class="text-center py-12 text-[#FAF8F5]/30">
                <i class="fa-solid fa-inbox text-3xl mb-3"></i>
                <p class="text-sm">No orders received yet. They will appear here once buyers place orders.</p>
            </div>
        @else
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs border-collapse">
                <thead>
                    <tr class="border-b border-[#FAF8F5]/10 text-[#FAF8F5]/40 font-bold uppercase tracking-wider">
                        <th class="py-3 px-4">Order ID</th>
                        <th class="py-3 px-4">Order Date</th>
                        <th class="py-3 px-4">Customer Details</th>
                        <th class="py-3 px-4">Items Ordered</th>
                        <th class="py-3 px-4">Total Bill</th>
                        <th class="py-3 px-4">Current Status</th>
                        <th class="py-3 px-4 text-right">Update State</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#FAF8F5]/5">
                    @foreach($orders as $order)
                        <tr class="hover:bg-[#FAF8F5]/5 transition duration-150">
                            <td class="py-4 px-4 font-bold text-[#C5A85A]">#{{ $order->id }}</td>
                            <td class="py-4 px-4 text-gray-400">{{ $order->created_at->format('Y-m-d') }}</td>
                            <td class="py-4 px-4 font-medium">{{ $order->customer_name }}</td>
                            <td class="py-4 px-4">{{ $order->items }}</td>
                            <td class="py-4 px-4 font-bold text-emerald-400">{{ number_format($order->total) }} TZS</td>
                            <td class="py-4 px-4">
                                <span class="px-2.5 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider
                                    @if($order->status === 'Pending') bg-yellow-500/10 text-yellow-400 border border-yellow-500/20
                                    @elseif($order->status === 'Dispatched') bg-blue-500/10 text-blue-400 border border-blue-500/20
                                    @else bg-emerald-500/10 text-emerald-400 border border-emerald-500/20
                                    @endif">
                                    {{ $order->status }}
                                </span>
                            </td>
                            <td class="py-4 px-4 text-right">
                                <form action="{{ route('vendor.orders.status', $order->id) }}" method="POST" class="inline-flex gap-2">
                                    @csrf
                                    <select name="status" class="bg-gray-900 border border-white/10 rounded-lg text-[10px] px-2 py-1 text-gray-300 focus:outline-none focus:border-[#C5A85A]">
                                        <option value="Pending" {{ $order->status === 'Pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="Dispatched" {{ $order->status === 'Dispatched' ? 'selected' : '' }}>Dispatched</option>
                                        <option value="Delivered" {{ $order->status === 'Delivered' ? 'selected' : '' }}>Delivered</option>
                                        <option value="Cancelled" {{ $order->status === 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                                    </select>
                                    <button type="submit" class="px-2.5 py-1 bg-[#C5A85A] text-[#0D0C0A] hover:bg-[#C5A85A]/90 text-[10px] font-bold rounded-lg transition">
                                        Update
                                    </button>
                                </form>
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
