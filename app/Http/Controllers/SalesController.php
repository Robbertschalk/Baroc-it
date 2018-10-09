<?php

namespace App\Http\Controllers;

use App\GetData;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function sales(){

        $data = GetData::all();

        return view('sales')
            ->with('data', $data);

    }

}
