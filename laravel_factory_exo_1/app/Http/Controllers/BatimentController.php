<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batiment;
class BatimentController extends Controller
{
   public function  index(){
        $datas = Batiment::all();
        return view('pages.batiment',compact('datas'));
    }
}
