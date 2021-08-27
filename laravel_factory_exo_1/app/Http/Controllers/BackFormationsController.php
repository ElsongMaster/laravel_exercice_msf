<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;

class BackFormationsController extends Controller
{
       public function  index(){
        $datas = Formation::all();
        return view('backoffice.backFormations',compact('datas'));
    }

    public function show(Formation $id){
        $formation = $id;
        return view('layouts.showFormation',compact('formation'));
    }
}
