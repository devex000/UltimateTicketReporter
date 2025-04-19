<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Priority;
use App\Models\Status;
use App\Models\Subcategory;
use App\Models\Ticket;
use App\Models\Topic;
use Illuminate\Http\Request;

class SnapshotController extends Controller
{
    public function export()
    {
        return view("snapshot.export");
    }

    public function export_gen(Request $request)
    {
        $exportData = [];

        if ($request->has("category")) {
            $exportData[] = ["category" => Category::all()];
        }
        if ($request->has("subcategory")) {
            $exportData[] = ["subcategory" => Subcategory::all()];
        }
        if ($request->has("topic")) {
            $exportData[] = ["topic" => Topic::all()];
        }
        if ($request->has("status")) {
            $exportData[] = ["status" => Status::all()];
        }
        if ($request->has("priority")) {
            $exportData[] = ["priority" => Priority::all()];
        }
        if ($request->has("ticket")) {
            $exportData[] = ["ticket" => Ticket::all()];
        }

        $filename = "utr_data_export_" . date("Y-m-d_H-i-s") . ".json";


        return response()->streamDownload(function () use ($exportData) {
            echo json_encode(["export_data" => $exportData], JSON_PRETTY_PRINT);
        }, $filename, [
            'Content-Type' => 'application/json'
        ]);

    }
    public function import()
    {
        return view("snapshot.import");
    }

    public function import_gen(Request $request)
    {
        $file = $request->file('file');
        $json = file_get_contents($file->getRealPath());
        $data = json_decode($json, true);

        foreach ($data['export_data'] as $item) {
            foreach ($item as $key => $value) {
                switch ($key) {
                    case 'category':
                        foreach ($value as $k => $v) {
                            Category::create($v);
                        }
                        break;
                    case 'subcategory':
                        foreach ($value as $k => $v) {
                            Subcategory::create($v);
                        }
                        break;
                    case 'topic':
                        foreach ($value as $k => $v) {
                            Topic::create($v);
                        }
                        break;
                    case 'status':
                        foreach ($value as $k => $v) {
                            Status::create($v);
                        }
                        break;
                    case 'priority':
                        foreach ($value as $k => $v) {
                            Priority::create($v);
                        }
                        break;
                    case 'ticket':
                        foreach ($value as $k => $v) {
                            Ticket::create($v);
                        }
                        break;
                    default:
                }
            }
        }

        return back()->with('success', 'Import zakończony pomyślnie!');
    }

}
