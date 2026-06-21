@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-4">Dashboard</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="bg-blue-500 text-white rounded-lg p-6">
                <h3 class="text-lg font-semibold">Total Categories</h3>
                <p class="text-4xl font-bold">{{ $totalCategories }}</p>
            </div>
            <div class="bg-green-500 text-white rounded-lg p-6">
                <h3 class="text-lg font-semibold">Total Products</h3>
                <p class="text-4xl font-bold">{{ $totalProducts }}</p>
            </div>
            <div class="bg-purple-500 text-white rounded-lg p-6">
                <h3 class="text-lg font-semibold">Total Stock Quantity</h3>
                <p class="text-4xl font-bold">{{ $totalStock }}</p>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold mb-4">Latest 5 Products</h3>
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
                    @forelse($latestProducts as $product)
                        <tr>
                            <td class="px-6 py-4">{{ $product->id }}</td>
                            <td class="px-6 py-4">{{ $product->name }}</td>
                            <td class="px-6 py-4">${{ $product->price }}</td>
                            <td class="px-6 py-4">{{ $product->stock }}</td>
                            <td class="px-6 py-4">{{ $product->category->name ?? 'N/A' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-gray-500">No products found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="mt-6">
            <a href="{{ route('products.index') }}" class="px-4 py-2 bg-blue-600 text-white rounded">View All Products</a>
            <a href="{{ route('products.create') }}" class="px-4 py-2 bg-indigo-600 text-white rounded">Add New Product</a>
        </div>
    </div>
@endsection