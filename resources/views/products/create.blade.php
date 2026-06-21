@extends('layouts.app')

@section('title', 'Create Product')

@section('content')
    <div class="container mx-auto max-w-2xl">
        <h2 class="text-2xl font-bold mb-4">Create New Product</h2>
        
        <form action="{{ route('products.store') }}" method="POST" class="bg-white rounded-lg shadow p-6">
            @csrf
            
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Category</label>
                <select name="category_id" class="w-full px-3 py-2 border rounded @error('category_id') border-red-500 @enderror">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Product Name</label>
                <input type="text" name="name" value="{{ old('name') }}" 
                    class="w-full px-3 py-2 border rounded @error('name') border-red-500 @enderror">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Price</label>
                <input type="number" name="price" step="0.01" value="{{ old('price') }}"
                    class="w-full px-3 py-2 border rounded @error('price') border-red-500 @enderror">
                @error('price')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Stock</label>
                <input type="number" name="stock" value="{{ old('stock', 0) }}"
                    class="w-full px-3 py-2 border rounded @error('stock') border-red-500 @enderror">
                @error('stock')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex gap-4">
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded">Create Product</button>
                <a href="{{ route('products.index') }}" class="px-6 py-2 bg-gray-300 text-gray-700 rounded">Cancel</a>
            </div>
        </form>
    </div>
@endsection