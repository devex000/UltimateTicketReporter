<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function store(Request $request)
    {
        Topic::create($request->all());
        return redirect()->route('category.index');
    }

    public function update(Request $request, Topic $topic)
    {
        $topic->update($request->all());
        return redirect()->route('category.index');
    }
    public function delete(Topic $topic)
    {
        $topic->delete();
        return redirect()->route('category.index');
    }
}
