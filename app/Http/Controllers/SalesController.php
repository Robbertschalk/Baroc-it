<?php

namespace App\Http\Controllers;

use App\Development;
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

    public function insert_project(Request $request){

        $data = Development::all();
        $insert_data = new Development();
        $insert_data->client_name = $request->client_name;
        $insert_data->project_name = $request->p_name;
        $insert_data->project_description = $request->p_desc;
        $insert_data->project_status = $request->p_status;


        if (isset($insert_data->client_name)){

            if (isset($insert_data->project_name)){

                if (isset($insert_data->project_description)){

                    if (isset($insert_data->project_status)){

                        $insert_data->save();
                        return view('sales')
                            ->with('data', $data);

                    }else{
                        $data = GetData::all();
                        $error = true;
                        return view('sales')
                            ->with('data', $data)
                            ->with('error', $error);
                    }

                }else{
                    $data = GetData::all();
                    $error = true;
                    return view('sales')
                        ->with('data', $data)
                        ->with('error', $error);
                }

            }else{
                $data = GetData::all();
                $error = true;
                return view('sales')
                    ->with('data', $data)
                    ->with('error', $error);
            }

        }else{
            $data = GetData::all();
            $error = true;
            return view('sales')
                ->with('data', $data)
                ->with('error', $error);
        }
   }



    public function insert(Request $request){


        $data = GetData::all();
        $insert_data = new Sales;
        $insert_data->Name = $request->name;
        $insert_data->Tel = $request->tel;
        $insert_data->limit = 0;
        $insert_data->Customernumber = $request->customernumber;
        $insert_data->Creditworthy = "pending";
        $insert_data->prospect = 0;
        $insert_data->Contactperson = $request->contactperson;


        if (isset($insert_data->Name)){

            if (isset($insert_data->Tel)){

                if (isset($insert_data->limit)){

                    if (isset($insert_data->Customernumber)){

                        if (isset($insert_data->Creditworthy)){

                            if (isset($insert_data->Contactperson)){


                                    $insert_data->save();
                                    $data = GetData::all();
                                    $success = true;
                                    return view('sales')
                                        ->with('data', $data)
                                        ->with('success', $success);


                            }else{
                                $data = GetData::all();
                                $error = true;
                                return view('sales')
                                    ->with('data', $data)
                                    ->with('error', $error);
                            }

                        }else{
                            $data = GetData::all();
                            $error = true;
                            return view('sales')
                                ->with('data', $data)
                                ->with('error', $error);
                        }

                    }else{
                        $data = GetData::all();
                        $error = true;
                        return view('sales')
                            ->with('data', $data)
                            ->with('error', $error);
                    }

                }else{
                    $data = GetData::all();
                    $error = true;
                    return view('sales')
                        ->with('data', $data)
                        ->with('error', $error);
                }

            }else{
                $data = GetData::all();
                $error = true;
                return view('sales')
                    ->with('data', $data)
                    ->with('error', $error);
            }

        }else{
            $data = GetData::all();
            $error = true;
            return view('sales')
                ->with('data', $data)
                ->with('error', $error);
        }


    }

}
