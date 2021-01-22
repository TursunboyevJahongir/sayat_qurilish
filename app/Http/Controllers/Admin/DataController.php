<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index(Request $request) {
        $data = Data::query()->get()->first();
        if ($request->isMethod('POST')) {
            $request->validate([
                'workers_count' => 'required|numeric',
                'projects_count' => 'required|numeric',
                'firm_year' => 'required|numeric|max:2021|min:1990',
                'about' => 'required|string'
            ]);

            $data->fill($request->post())->update();
            return redirect(route('admin.data'))->with(['message' => 'Ma\'lumotlar saqlandi!']);
        }
        return view('admin.data', compact('data'));
    }
}
