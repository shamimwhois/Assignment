@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-4">Products</h2>
        
        <div class="bg-white rounded-lg shadow p-4 mb-4">
            <form method="GET" action="{{ route('products.index') }}" class="flex gap-4">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by name..." class="flex-1 px-3 py-2 border rounded">
                <select name="sort" class="px-3 py-2 border rounded">
                    <option value="">Sort by Price</option>
                    <option value="asc" {{ request('sort') == 'asc' ? 'selected' : '' }}>Low to High</option>
                    <option value="desc" {{ request('sort') == 'desc' ? 'selected' : '' }}>High to Low</option>
                </select>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Filter</button>
                <a href="{{ route('products.index') }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded">Reset</a>
            </form>
        </div>
        
        <div class="bg-white rounded-lg shadow p-4 mb-4">
            <p class="text-gray-600">Total Products: <strong>{{ $totalProducts }}</strong></p>
        </div>
        
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <table class="min-w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Price</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Stock</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Category</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($products as $product)
                        <tr>
                            <td class="px-6 py-4">{{ $product->id }}</td>
                            <td class="px-6 py-4">{{ $product->name }}</td>
                            <td class="px-6 py-4">${{ $product->price }}</td>
                            <td class="px-6 py-4">{{ $product->stock }}</td>
                            <td class="px-6 py-4">{{ $product->category_name }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-gray-500">No products found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="mt-4">
            <a href="{{ route('products.redirect') }}" class="px-4 py-2 bg-green-600 text-white rounded">Test Redirect</a>
            <a href="{{ route('products.create') }}" class="px-4 py-2 bg-indigo-600 text-white rounded">Add New Product</a>
        </div>
    </div>
@endsection