<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function productHome()
    {
        $categories = Category::orderBy('name')->get();
        return view('admin.product.home', compact('categories'));
    }

    function productCreateView()
    {
        $categories = Category::orderBy('name')->get();
        return view('admin.product.create', compact('categories'));
    }

    function productCreate(Request $request)
    {
        $fileds = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required',
                        'numeric',
                        'min:0',
                        'regex:/^\d+(\.\d{1,2})?$/',
                        ],
            'stock' => ['required', 'integer', 'min:0'],
            'category' => ['required', 'string', 'max:255'],
            'description' => ['nullable','string', 'max:1000'],
        ]);

        if ($product = Product::create($fileds))
            {
                return redirect()->route('admin.product.create.view')->with('success', 'Product Added Successfully');
            }

        return back()->withErrors([
            'error', 'Failed To Add Product'
        ]);
    }

    public function products()
    {
        $products = Product::all();
        // to return all the deleted products
        $deletedProducts = Product::onlyTrashed()->get();
        // return the deleted and non deleted users
        $allProducts = Product::withTrashed()->get();
        // categories
        $categories = Category::orderBy('name')->get();

        return view('admin.product.home', compact('products', 'deletedProducts', 'categories'));
    }

    public function productDelete(Product $product)
    {
        $product->delete();
        return back()-> with('success', 'Product Successfully Deleted');
    }

    function productRestore($id)
    {
        $product = Product::onlyTrashed()->findOrFail($id);
        $product->restore();
        return back()->with('success', 'Product Restored Successfullt');
    }

    function forceDelete($id)
    {
        $product = Product::withTrashed()->findOrFail($id);
        $product->forceDelete();

        return back()->with('success', 'Product Permanently Deleted');
    }
}
