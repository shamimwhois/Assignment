@extends('layouts.app')

@section('title', 'Product Details')

@section('content')
    <div class="container mx-auto max-w-2xl">
        <h2 class="text-2xl font-bold mb-4">Product Details (JSON Response)</h2>
        
        <div class="bg-white rounded-lg shadow p-6">
            <p class="mb-2">This endpoint returns JSON data. Access <code>/products/{id}</code> via AJAX or Postman to see the JSON response.</p>
            <p class="mb-4">Try accessing: <a href="{{ route('products.show', 1) }}" class="text-blue-600">/products/1</a></p>
            
            <div class="mt-4">
                <a href="{{ route('products.index') }}" class="px-4 py-2 bg-gray-600 text-white rounded">Back to Products</a>
            </div>
        </div>
    </div>
@endsection