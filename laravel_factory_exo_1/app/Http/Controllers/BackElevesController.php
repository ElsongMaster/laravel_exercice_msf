<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleve;
class BackElevesController extends Controller
{
       public function  index(){
        $datas = Eleve::all();
        return view('backoffice.layouts.backBatiment',compact('datas'));
    }

        public function show(Eleve $id){
        $eleve = $id;
        return view('layouts.showEleve',compact('eleve'));
    }
}
