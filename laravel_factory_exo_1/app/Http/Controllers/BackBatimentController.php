<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batiment;
class BackBatimentController extends Controller
{
       public function  index(){
        $datas = Batiment::all();
        return view('backoffice.layouts.backBatiment',compact('datas'));
    }


    public function show(Batiment $id){
        $batiment = $id;
        return view('layouts.showBatiment',compact('batiment'));
    }
}
