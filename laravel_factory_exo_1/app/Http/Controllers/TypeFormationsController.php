<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Typeformation;

class TypeFormationsController extends Controller
{
       public function  index(){
        $datas = Typeformation::all();
        return view('pages.typeFormations',compact('datas'));
    }
}
