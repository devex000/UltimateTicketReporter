<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function store(Request $request)
    {
        Subcategory::create($request->all());
        return redirect()->route('category.index');
    }

    public function update(Request $request, Subcategory $subcategory)
    {
        $subcategory->update($request->all());
        return redirect()->route('category.index');
    }

    public function delete(Subcategory $subcategory)
    {
        $subcategory->delete();
        return redirect()->route('category.index');
    }
}
