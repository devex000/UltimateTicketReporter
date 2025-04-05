<?php

namespace App\Http\Controllers;

use App\Models\Priority;
use Illuminate\Http\Request;

class PriorityController extends Controller
{
    public function index()
    {
        return view("priority.index", [
            "priorities" => Priority::all()
        ]);
    }

    public function store(Request $request)
    {
        Priority::create($request->all());
        return redirect()->route('priority.index');
    }

    public function delete(Priority $priority)
    {
        $priority->delete();
        return redirect()->route('priority.index');
    }

    public function update(Request $request, Priority $priority)
    {
        $priority->update($request->all());
        return redirect()->route('priority.index');
    }
}

