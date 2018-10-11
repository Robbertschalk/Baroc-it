<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Development;

class DevelopmentController extends Controller
{
    public function dev() {

        // Data ophalen uit de database

        $data = Development::all();


        // View returnen

        return view('dev')
            ->with('data', $data);
    }

}
