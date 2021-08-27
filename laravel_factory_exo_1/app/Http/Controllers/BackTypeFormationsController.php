<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeFormation;

class BackTypeFormationsController extends Controller
{
       public function  index(){
        $datas = TypeFormation::all();
        return view('backoffice.layouts.backTypeFormations',compact('datas'));
    }

    public function show(TypeFormation $id){
        $typeformation = $id;
        return view('layouts.showTypeFormation',compact('typeformation'));
    }
}
