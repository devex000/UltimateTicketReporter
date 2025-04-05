<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->route('category.index');
    }

    public function delete(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }

    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return redirect()->route('category.index');
    }
}
