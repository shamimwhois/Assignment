<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('products')->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('products.*', 'categories.name as category_name');

        if ($request->has('search') && $request->search != '') {
            $query->where('products.name', 'like', '%' . $request->search . '%');
        }

        if ($request->has('sort')) {
            $sortDirection = $request->sort === 'desc' ? 'desc' : 'asc';
            $query->orderBy('products.price', $sortDirection);
        }

        $products = $query->get();
        $totalProducts = DB::table('products')->count();

        return view('products.index', compact('products', 'totalProducts'));
    }

    public function show($id)
    {
        $product = DB::table('products')->find($id);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        return response()->json($product);
    }

    public function redirect()
    {
        return redirect()->route('products.index')
            ->with('success', 'Redirect successful! Welcome to the product list.');
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        Log::info('Product created', $validated);

        $product = Product::create($validated);

        return redirect()->route('products.confirmation', $product->id)
            ->with('success', 'Product created successfully!')
            ->with('product', $product);
    }

    public function confirmation($id)
    {
        $product = Product::with('category')->findOrFail($id);
        return view('products.confirmation', compact('product'));
    }
}