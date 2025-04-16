<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    // Zrobiłem migrację, relacje, teraz formularze i web.php
    public function index()
    {
        return view("status.index", [
            "statuses" => Status::all()
        ]);
    }

    public function store(Request $request)
    {
        Status::create($request->all());
        return redirect()->route('status.index');
    }

    public function update(Request $request, Status $status) {
        $status->update($request->all());
        return redirect()->route('status.index');
    }

    public function delete(Status $status) {
        $status->delete();
        return redirect()->route('status.index');
    }

    public function set_as_new(Status $status) {
        foreach (Status::all() as $s) {
            $s->new = 0;
            $s->save();
        }
        $status->new = 1;
        $status->save();
        return redirect()->route('status.index');
    }
}
