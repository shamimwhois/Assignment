# Laravel Product Management Module

A simple product management module demonstrating Laravel MVC, Blade templates, Eloquent ORM, and Query Builder.

## Features

### Task 1: Routes & Controller
- GET /products - Product list (View Response)
- GET /products/{id} - Product details (JSON Response)
- GET /products/redirect - Redirect with flash message
- GET /products/create - Product creation form
- POST /products - Store product with validation

### Task 2: Blade Templates
- Master layout with @yield and @section
- Partials: header, navbar, footer (using @include)
- All views extend master layout with @extends

### Task 3: Migrations
- categories table: id, name, timestamps
- products table: id, category_id, name, price, stock, timestamps
- Foreign key relationship: products.category_id -> categories.id

### Task 4: Session & Logging
- Flash session messages on successful product creation
- Data logged via Log::info() to storage/logs/laravel.log
- Redirect to confirmation page with product details

### Task 5: Query Builder
- Display all products with search filter
- Sort by price (ascending/descending)
- Total product count display

### Task 6: Eloquent ORM
- One-to-Many relationship: Category hasMany Products
- Product belongsTo Category
- Eager loading implemented in queries

### Task 7: Dashboard
- Total Categories count
- Total Products count
- Total Stock Quantity (sum)
- Latest 5 Products

## Installation

composer install
php artisan migrate:fresh --seed
php artisan serve

## Routes

| Method | URI | Action |
|--------|-----|--------|
| GET    | /dashboard | Dashboard statistics |
| GET    | /products | Product list with search/sort |
| GET    | /products/create | Create product form |
| POST   | /products | Store product |
| GET    | /products/{id} | JSON product data |
| GET    | /products/{id}/confirmation | Product confirmation |
| GET    | /products/redirect | Test redirect

## Database Seeding

The ProductManagementSeeder creates sample data for testing.
