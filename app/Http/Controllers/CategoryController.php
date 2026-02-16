<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function viewCategory()
    {
        $categories = Category::all();
        return view('admin.category.create', compact('categories'));
    }

    public function addCategories(Request $request)
    {
        $fields = $request-> validate([
            'name' => 'required|string|max:255'
        ]);

        $category = Category::create($fields);

        return back()->with('success', 'Category Addedd Successfully');
    }

    public function deleteCategories(Category $category)
    {
        $category->delete();
        return back()->with('success', 'Category Deleted Sycessfully');
    }


}
