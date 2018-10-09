<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function insert(Request $reg){

        $name = $reg->input('name');
        $tel =$reg->input('tel');
        $limit =$reg->input('limit');
        $customernumber =$reg->input('customernumber');
        $creditworthy= $reg->input('creditworthy');
        $contactperson = $reg->input('contactperson');

        $data = array('Name'=>$name, 'tel'=>$tel, 'limit'=>'o',  'Customernumber'=>$customernumber, 'Creditworthy'=> $creditworthy, 'prospect'=> '0', 'contactperson'=> $contactperson );
        DB::table('sales')->insert($data);
        echo 'yey';
    }

}
