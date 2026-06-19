@extends('layouts.admin')

@section('title', 'Manage Agents — LotusRise Global')
@section('page_title', 'Agent Network Directory')

@section('content')
<div class="space-y-8">

    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs border-collapse">
                <thead>
                    <tr class="text-gray-400 font-bold uppercase tracking-wider border-b border-gray-100 pb-3">
                        <th class="py-3 px-4">Agent Name</th>
                        <th class="py-3 px-4">Occupation</th>
                        <th class="py-3 px-4">Region & District</th>
                        <th class="py-3 px-4">Selected Package</th>
                        <th class="py-3 px-4">Subscription Status</th>
                        <th class="py-3 px-4 text-right font-bold">Action Control</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-gray-800">
                    @foreach($agents as $agent)
                        <tr class="hover:bg-gray-50 transition duration-150">
                            <td class="py-4 px-4">
                                <span class="font-bold text-sm block text-gray-900">{{ $agent->full_name }}</span>
                                <span class="text-[10px] text-gray-400 block mt-0.5">{{ $agent->email }} | {{ $agent->phone_number }}</span>
                            </td>
                            <td class="py-4 px-4 font-medium">{{ $agent->occupation }}</td>
                            <td class="py-4 px-4">
                                <span class="block">{{ $agent->region }}</span>
                                <span class="text-[10px] text-gray-400 block mt-0.5">{{ $agent->district }} District</span>
                            </td>
                            <td class="py-4 px-4">
                                <span class="px-2.5 py-1 rounded-lg bg-gray-100 font-bold text-gray-700 uppercase text-[9px] tracking-wider">{{ $agent->preferred_package }}</span>
                            </td>
                            <td class="py-4 px-4">
                                <span class="px-2.5 py-1 rounded-full text-[9px] font-bold uppercase tracking-wider
                                    @if($agent->subscription_status === 'pending') bg-yellow-50 text-yellow-700 border border-yellow-200
                                    @elseif($agent->subscription_status === 'active') bg-emerald-50 text-emerald-700 border border-emerald-200
                                    @else bg-rose-50 text-rose-700 border border-rose-200
                                    @endif">
                                    {{ $agent->subscription_status }}
                                </span>
                                @if($agent->subscription_expires_at)
                                    <span class="block text-[8px] text-gray-400 mt-1">Expires: {{ $agent->subscription_expires_at->format('d M, Y') }}</span>
                                @endif
                            </td>
                            <td class="py-4 px-4 text-right flex justify-end gap-2">
                                @if($agent->subscription_status !== 'active')
                                    <form action="{{ route('admin.agents.status', $agent->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="status" value="active">
                                        <button type="submit" class="px-3 py-1.5 bg-emerald-600 hover:bg-emerald-500 text-white font-bold rounded-lg text-[10px] transition">
                                            Activate
                                        </button>
                                    </form>
                                @endif
                                @if($agent->subscription_status !== 'expired')
                                    <form action="{{ route('admin.agents.status', $agent->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="status" value="expired">
                                        <button type="submit" class="px-3 py-1.5 bg-rose-600 hover:bg-rose-500 text-white font-bold rounded-lg text-[10px] transition">
                                            Expire
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
