<nav class="w-64 bg-white shadow-sm min-h-screen p-4">
    <ul class="space-y-2">
        <li>
            <a href="{{ route('dashboard') }}" class="block px-4 py-2 rounded hover:bg-gray-100 text-gray-700 {{ request()->routeIs('dashboard') ? 'bg-blue-50 text-blue-600' : '' }}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('products.index') }}" class="block px-4 py-2 rounded hover:bg-gray-100 text-gray-700 {{ request()->routeIs('products.index') ? 'bg-blue-50 text-blue-600' : '' }}">
                Products
            </a>
        </li>
        <li>
            <a href="{{ route('products.create') }}" class="block px-4 py-2 rounded hover:bg-gray-100 text-gray-700 {{ request()->routeIs('products.create') ? 'bg-blue-50 text-blue-600' : '' }}">
                Add Product
            </a>
        </li>
    </ul>
</nav>