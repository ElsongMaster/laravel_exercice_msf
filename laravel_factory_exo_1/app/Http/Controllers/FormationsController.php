<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;

class FormationsController extends Controller
{
       public function  index(){
        $datas = Formation::all();
        return view('pages.formations',compact('datas'));
    }
}
