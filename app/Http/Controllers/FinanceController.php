<?php

namespace App\Http\Controllers;

use App\GetData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Finance;

class FinanceController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('finance');
    }

        public function finance()
        {

            $data = Finance::all();

            return view('finance')
                ->with('data', $data);

        }
    }
<<<<<<< HEAD
=======


}
>>>>>>> fin
