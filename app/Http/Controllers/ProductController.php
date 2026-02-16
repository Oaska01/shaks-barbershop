<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function productHome()
    {
        return view('admin.product.home');
    }

    function productCreateView()
    {
        return view('admin.product.create');
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
        return view('admin.product.home', compact('products', 'deletedProducts'));
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
