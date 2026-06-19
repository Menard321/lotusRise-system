<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LotusAIController extends Controller
{
    public function query(Request $request)
    {
        $query = strtolower($request->input('query', ''));

        if (empty(trim($query))) {
            return response()->json([
                'success' => false,
                'message' => 'Empty query submitted.',
                'response' => "### 🤖 Lotus AI Core Directory\nQuery input was empty. Please ask a specific question or use one of the suggestions below.",
                'type' => 'error'
            ]);
        }

        // 1. Cross-Border Smart Tariff & Compliance Advisor
        if (str_contains($query, 'tariff') || str_contains($query, 'compliance') || str_contains($query, 'customs') || str_contains($query, 'kampala') || str_contains($query, 'nairobi') || str_contains($query, 'duty')) {
            return response()->json([
                'success' => true,
                'type' => 'tariff',
                'response' => "### 📋 EAC Customs Tariff & Compliance Report\n" .
                              "- **Cargo Type**: Premium Electronics & Standard Goods\n" .
                              "- **Route**: Dar es Salaam Port (Tanzania) to Kampala (Uganda) via Mutukula border\n" .
                              "- **HS Code Category**: 8517.13.00 (Smartphones / Telecom Devices)\n\n" .
                              "### 💰 Estimated Duties & Levies:\n" .
                              "- **Common External Tariff (CET)**: **25%** (EAC band standard)\n" .
                              "- **VAT (Uganda)**: **18%**\n" .
                              "- **Infrastructure Levy**: **1.5%**\n" .
                              "- **Estimated Customs Duty total**: **44.5%** of CIF value\n\n" .
                              "### ⚠️ Customs Clearance Protocols:\n" .
                              "- Mandatory pre-export verification of conformity (PVoC) certificate required prior to dispatch.\n" .
                              "- Electronic cargo tracking system (ECTS) seal must be active at Dar Port entry.\n" .
                              "- Clearing documentation must be declared through the EAC Single Customs Territory (SCT) system at Mutukula."
            ]);
        }

        // 2. Intelligent Freight Matching & Dynamic Routing
        if (str_contains($query, 'route') || str_contains($query, 'freight') || str_contains($query, 'legs') || str_contains($query, 'arusha') || str_contains($query, 'truck') || str_contains($query, 'discount') || str_contains($query, 'return')) {
            return response()->json([
                'success' => true,
                'type' => 'freight',
                'response' => "### 🚛 Dynamic Freight Route Matches\n" .
                              "- **Active Route Legs**: Arusha to Dar es Salaam corridor\n" .
                              "- **Available Match**: **Lotus Express Truck LR-2401** (Mercedes Actros 3340)\n" .
                              "- **Availability Date**: 2026-06-23\n" .
                              "- **Volumetric Free Capacity**: **12.5 Tons** (Approx. 60% trailer space free)\n\n" .
                              "### 📉 Volumetric Pricing Discount:\n" .
                              "- Standard dry cargo route rate: ~~TZS 1,200,000~~\n" .
                              "- **Dynamic Return-Leg Discount (35%)**: **TZS 780,000**\n\n" .
                              "- **Action Suggestion**: Booking this return leg saves fuel overheads and cuts lead time by 14 hours.",
                'action_html' => '<button type="button" onclick="simulatedBooking(\'LR-2401\', \'TZS 780,000\')" class="px-5 py-2.5 bg-[#C5A85A] text-[#0D0C0A] font-extrabold text-xs uppercase tracking-wider rounded-lg shadow hover:bg-[#C5A85A]/90 transition">Instant Freight Booking</button>'
            ]);
        }

        // 3. Bilingual Swahili/English Voice Copilot
        if (str_contains($query, 'voice') || str_contains($query, 'tuma') || str_contains($query, 'mzigo') || str_contains($query, 'dodoma') || str_contains($query, 'swahili') || str_contains($query, 'command')) {
            return response()->json([
                'success' => true,
                'type' => 'voice',
                'response' => "### 🎙️ Swahili/English Voice Copilot Intent Directory\n" .
                              "- **Speech Detected**: \"Tuma mzigo Dodoma\"\n" .
                              "- **Parsed Intent**: `CREATE_LOGISTICS_MANIFEST`\n" .
                              "- **Confidence Score**: **98.4%**\n\n" .
                              "### ⚙️ Extracted Parameters:\n" .
                              "- **Action Type**: Dispatch Cargo / Sourcing Schedulers\n" .
                              "- **Destination Node**: **Dodoma (Central Tanzania)**\n" .
                              "- **Carrier Assignment**: **Lotus Express Fleet**\n" .
                              "- **Priority Level**: High Express\n\n" .
                              "- **Log Status**: Manifest created. System waiting for 1-click execution confirmation."
            ]);
        }

        // 4. Predictive Inventory & Supply-Chain Forecasting
        if (str_contains($query, 'forecast') || str_contains($query, 'velocity') || str_contains($query, 'inventory') || str_contains($query, 'stock') || str_contains($query, 'soap') || str_contains($query, 'mwanza')) {
            return response()->json([
                'success' => true,
                'type' => 'forecast',
                'response' => "### 📈 Regional Demand & Supply-Chain Forecast\n" .
                              "- **Product Node**: Bulk Laundry Soap / Wholesale Sourcing\n" .
                              "- **Region**: Mwanza Lake Zone District\n" .
                              "- **Monthly Velocity Check**: High (+18% projected demand spike over next 30 days)\n\n" .
                              "### 🔍 Supply Status:\n" .
                              "- Mwanza hub inventory depletion forecast: **9 days**.\n" .
                              "- Suggested Restock Action: **2,500 Units** dispatched from Dar es Salaam wholesalers.\n\n" .
                              "### ⚡ Express Restocking Offer:\n" .
                              "- Integrated Lotus Express shipment cost: **TZS 450,000**\n" .
                              "- Restocking lead time: 36 hours",
                'action_html' => '<button type="button" onclick="simulatedBooking(\'Restock Soap\', \'TZS 450,000\')" class="px-5 py-2.5 bg-[#C5A85A] text-[#0D0C0A] font-extrabold text-xs uppercase tracking-wider rounded-lg shadow hover:bg-[#C5A85A]/90 transition">1-Click Restock Dispatch</button>'
            ]);
        }

        // Fallback state
        return response()->json([
            'success' => true,
            'type' => 'fallback',
            'response' => "### 🤖 Lotus AI Core Directory\n" .
                          "I am the central supply-chain intelligence agent for LotusRise Global. I didn't recognize that specific question, but I can help you with:\n\n" .
                          "1. **Cross-Border Customs & Tariffs**: e.g., \"Tariff check Dar to Kampala\"\n" .
                          "2. **Freight Logistics**: e.g., \"Return legs from Arusha next week\"\n" .
                          "3. **Bilingual Commands**: e.g., \"Tuma mzigo Dodoma\"\n" .
                          "4. **Inventory Demand Forecast**: e.g., \"Velocity check for soap in Mwanza\"\n\n" .
                          "Please refine your search query or click one of the suggestion pills below."
        ]);
    }
}
