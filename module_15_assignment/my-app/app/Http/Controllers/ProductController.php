<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validation code for the product data
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            // Add more validation rules as needed
        ]);

        $product = Product::create($validatedData);

        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // Validation code for the product data
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            // Add more validation rules as needed
        ]);

        $product = Product::findOrFail($id);
        $product->update($validatedData);

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
