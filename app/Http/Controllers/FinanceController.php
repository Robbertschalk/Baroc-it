<?php

namespace App\Http\Controllers;

use App\GetData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Finance;

class FinanceController extends Controller
{
    public function finance() {

        $data = Finance::all();

        return view('finance')
            ->with('data', $data);
    }


}
