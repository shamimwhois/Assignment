<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCategories = Category::count();
        $totalProducts = Product::count();
        $totalStock = Product::sum('stock');
        $latestProducts = Product::with('category')->latest()->take(5)->get();

        return view('dashboard', compact('totalCategories', 'totalProducts', 'totalStock', 'latestProducts'));
    }
}