<?php

namespace App\Http\Controllers;

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
}
