@extends('layouts.app')

@section('title', 'Product Confirmation')

@section('content')
    <div class="container mx-auto max-w-2xl">
        <h2 class="text-2xl font-bold mb-4">Product Created Successfully</h2>
        
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold mb-3">Product Information:</h3>
            
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <p class="text-gray-600">Product ID:</p>
                    <p class="font-medium">{{ $product->id }}</p>
                </div>
                <div>
                    <p class="text-gray-600">Product Name:</p>
                    <p class="font-medium">{{ $product->name }}</p>
                </div>
                <div>
                    <p class="text-gray-600">Category:</p>
                    <p class="font-medium">{{ $product->category->name ?? 'N/A' }}</p>
                </div>
                <div>
                    <p class="text-gray-600">Price:</p>
                    <p class="font-medium">${{ $product->price }}</p>
                </div>
                <div>
                    <p class="text-gray-600">Stock:</p>
                    <p class="font-medium">{{ $product->stock }}</p>
                </div>
                <div>
                    <p class="text-gray-600">Created At:</p>
                    <p class="font-medium">{{ $product->created_at->format('Y-m-d H:i:s') }}</p>
                </div>
            </div>
            
            <div class="mt-6">
                <a href="{{ route('products.index') }}" class="px-4 py-2 bg-blue-600 text-white rounded">Back to Products</a>
            </div>
        </div>
    </div>
@endsection