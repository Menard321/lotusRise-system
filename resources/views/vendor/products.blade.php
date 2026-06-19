@extends('layouts.dashboard')

@section('title', 'Product Catalog — LotusRise Global')
@section('page_title', 'Wholesale Product Catalog')

@section('content')
<div class="space-y-8">

    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-sm font-bold uppercase tracking-wider text-[#FAF8F5]/60">Your Wholesale Catalog</h2>
            <p class="text-xs text-[#FAF8F5]/40 mt-0.5">List products for upcountry bulk buyers.</p>
        </div>
        <button onclick="toggleProductModal()" class="px-5 py-2.5 bg-[#C5A85A] hover:bg-[#C5A85A]/90 text-[#0D0C0A] font-bold text-xs rounded-xl shadow-sm transition">
            <i class="fa-solid fa-plus mr-1.5"></i>List New Product
        </button>
    </div>

    {{-- Success / Error Alerts --}}
    @if(session('success'))
        <div class="bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs font-semibold px-4 py-3 rounded-xl">
            <i class="fa-solid fa-circle-check mr-2"></i>{{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="bg-rose-500/10 border border-rose-500/20 text-rose-400 text-xs font-semibold px-4 py-3 rounded-xl">
            <i class="fa-solid fa-triangle-exclamation mr-2"></i>{{ $errors->first() }}
        </div>
    @endif

    <!-- Products Table -->
    <div class="bg-[#13110E] p-6 rounded-2xl border border-[#FAF8F5]/10">
        @if($products->isEmpty())
            <div class="text-center py-12 text-[#FAF8F5]/30">
                <i class="fa-solid fa-box-open text-3xl mb-3"></i>
                <p class="text-sm">No products listed yet. Add your first product above.</p>
            </div>
        @else
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs border-collapse">
                <thead>
                    <tr class="border-b border-[#FAF8F5]/10 text-[#FAF8F5]/40 font-bold uppercase tracking-wider">
                        <th class="py-3 px-4">Item ID</th>
                        <th class="py-3 px-4">Product Name</th>
                        <th class="py-3 px-4">Category</th>
                        <th class="py-3 px-4">Wholesale Price</th>
                        <th class="py-3 px-4">Stock Count</th>
                        <th class="py-3 px-4">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#FAF8F5]/5">
                    @foreach($products as $prod)
                        <tr class="hover:bg-[#FAF8F5]/5 transition duration-150">
                            <td class="py-4 px-4 font-bold text-[#C5A85A]">#{{ $prod->id }}</td>
                            <td class="py-4 px-4 font-semibold">{{ $prod->name }}</td>
                            <td class="py-4 px-4 text-[#FAF8F5]/60">{{ $prod->category }}</td>
                            <td class="py-4 px-4 font-bold text-[#FAF8F5]">{{ number_format($prod->price) }} TZS</td>
                            <td class="py-4 px-4">{{ $prod->stock }} units</td>
                            <td class="py-4 px-4">
                                <span class="px-2 py-0.5 rounded-full text-[9px] font-bold uppercase tracking-wider
                                    @if($prod->status === 'In Stock') bg-emerald-500/10 text-emerald-400 border border-emerald-500/20
                                    @else bg-rose-500/10 text-rose-400 border border-rose-500/20
                                    @endif">
                                    {{ $prod->status }}
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

<!-- Add Product Modal -->
<div id="product-modal" class="fixed inset-0 z-50 bg-[#0d0c0a]/80 backdrop-blur-sm hidden flex items-center justify-center p-4">
    <div class="bg-[#13110E] text-[#FAF8F5] rounded-3xl max-w-md w-full p-8 relative shadow-2xl border border-[#FAF8F5]/10">
        <button onclick="toggleProductModal()" class="absolute top-6 right-6 text-[#FAF8F5]/60 hover:text-white"><i class="fa-solid fa-xmark text-xl"></i></button>
        
        <h3 class="text-lg font-bold mb-1">List a New Product</h3>
        <p class="text-xs text-gray-500 mb-6">List inventory for bulk orders.</p>

        <form action="{{ route('vendor.products.store') }}" method="POST" class="space-y-4">
            @csrf
            
            <!-- Name -->
            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-gray-400 mb-1">Product Name</label>
                <input type="text" name="name" required class="block w-full px-4 py-2.5 bg-gray-900 border border-white/10 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
            </div>

            <!-- Category -->
            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-gray-400 mb-1">Category</label>
                <select name="category" required class="block w-full px-4 py-2.5 bg-gray-900 border border-white/10 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A] text-gray-400">
                    <option value="Electronics">Electronics</option>
                    <option value="Home Appliances">Home Appliances</option>
                    <option value="Fashion">Fashion</option>
                    <option value="Hardware">Hardware</option>
                    <option value="Agriculture">Agriculture</option>
                </select>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <!-- Price -->
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-gray-400 mb-1">Price (TZS)</label>
                    <input type="number" name="price" required min="0" class="block w-full px-4 py-2.5 bg-gray-900 border border-white/10 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                </div>
                <!-- Stock -->
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-gray-400 mb-1">Stock Level</label>
                    <input type="number" name="stock" required min="0" class="block w-full px-4 py-2.5 bg-gray-900 border border-white/10 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                </div>
            </div>

            <button type="submit" class="w-full py-3 bg-[#C5A85A] hover:bg-[#C5A85A]/90 text-[#0D0C0A] font-bold rounded-xl shadow-md transition">
                List Product in Catalog
            </button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    const modal = document.getElementById('product-modal');
    function toggleProductModal() {
        modal.classList.toggle('hidden');
    }
</script>
@endsection
