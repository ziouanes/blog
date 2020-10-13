<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\travels;
//use Validator;

class adminconroller extends Controller
{

    public function index()
    {
        $data['rows'] = travels::all();
        return view('admin.showtravels')->with($data);
    }


    public function ajouter(Request $request)
    {
        if ($request->ajax()) {
            $request->validate([
                'name_fr' => 'required|string|max:50',
                // 'name_en' => 'required|string|max:50',
                // 'description_fr' => 'required|string|max:50',
                // 'description_en' => 'required|string|max:15',
                // 'price' => 'required|float|max:50',
                // 'date' => 'required|string|max:50',
                // 'places' => 'required|string|max:50',
                // 'type' => 'required|string|max:15',
                // 'members' => 'required|string|max:15',

            ]);

            // // dd($request->name);

            $data = new travels;
            $data->name_fr = $request->name_fr;
            // $data->name_en = $request->name_en;
            // $data->description_fr = $request->description_fr;
            // $data->description_en = $request->description_en;
            // $data->price = $request->price;
            // $data->date = $request->date;
            // $data->places = $request->places;
            // $data->type = $request->type;
            // $data->members = $request->members;

            $data->save();

            // $respond['row'] = $data;
            // return view('row')->with($respond);
        }
    }
}
