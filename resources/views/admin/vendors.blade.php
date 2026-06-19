@extends('layouts.admin')

@section('title', 'Manage Vendors — LotusRise Global')
@section('page_title', 'Wholesale Vendors Onboarding')

@section('content')
<div class="space-y-8">

    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs border-collapse">
                <thead>
                    <tr class="text-gray-400 font-bold uppercase tracking-wider border-b border-gray-100 pb-3">
                        <th class="py-3 px-4">Business Details</th>
                        <th class="py-3 px-4">Owner Name</th>
                        <th class="py-3 px-4">TIN / VRN</th>
                        <th class="py-3 px-4">Category</th>
                        <th class="py-3 px-4">Physical Location</th>
                        <th class="py-3 px-4">Approval Status</th>
                        <th class="py-3 px-4 text-right font-bold">Action Control</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-gray-800">
                    @foreach($vendors as $vendor)
                        <tr class="hover:bg-gray-50 transition duration-150">
                            <td class="py-4 px-4">
                                <span class="font-bold text-sm block text-gray-900">{{ $vendor->business_name }}</span>
                                <span class="text-[10px] text-gray-400 block mt-0.5">{{ $vendor->email }} | {{ $vendor->phone_number }}</span>
                            </td>
                            <td class="py-4 px-4 font-medium">{{ $vendor->owner_name }}</td>
                            <td class="py-4 px-4">
                                <span class="block">TIN: {{ $vendor->tin }}</span>
                                <span class="text-[10px] text-gray-400 block mt-0.5">VRN: {{ $vendor->vrn ?? 'N/A' }}</span>
                            </td>
                            <td class="py-4 px-4 text-gray-600 font-semibold">{{ $vendor->business_category }}</td>
                            <td class="py-4 px-4 text-gray-500">{{ $vendor->location }}</td>
                            <td class="py-4 px-4">
                                <span class="px-2.5 py-1 rounded-full text-[9px] font-bold uppercase tracking-wider
                                    @if($vendor->status === 'pending') bg-yellow-50 text-yellow-700 border border-yellow-200
                                    @elseif($vendor->status === 'approved') bg-emerald-50 text-emerald-700 border border-emerald-200
                                    @else bg-rose-50 text-rose-700 border border-rose-200
                                    @endif">
                                    {{ $vendor->status }}
                                </span>
                            </td>
                            <td class="py-4 px-4 text-right flex justify-end gap-2">
                                @if($vendor->status !== 'approved')
                                    <form action="{{ route('admin.vendors.status', $vendor->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="status" value="approved">
                                        <button type="submit" class="px-3 py-1.5 bg-emerald-600 hover:bg-emerald-500 text-white font-bold rounded-lg text-[10px] transition">
                                            Approve
                                        </button>
                                    </form>
                                @endif
                                @if($vendor->status !== 'suspended')
                                    <form action="{{ route('admin.vendors.status', $vendor->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="status" value="suspended">
                                        <button type="submit" class="px-3 py-1.5 bg-rose-600 hover:bg-rose-500 text-white font-bold rounded-lg text-[10px] transition">
                                            Suspend
                                        </button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
