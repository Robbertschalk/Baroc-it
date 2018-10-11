<?php

namespace App\Http\Controllers;

use App\GetData;
use App\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function sales(){

        $data = GetData::all();

        return view('sales')
            ->with('data', $data);

    }

    public function insert(Request $request){

        $data = new Sales;
        $data->Name = $request->name;
        $data->Tel = $request->tel;
        $data->limit = 0;
        $data->Customernumber = $request->customernumber;
        $data->Creditworthy = "pending";
        $data->prospect = 0;
        $data->Contactperson = $request->contactperson;
        $data->save();

        $data = GetData::all();

        return view('sales')
            ->with('data', $data);
    }

}
