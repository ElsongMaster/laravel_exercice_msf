<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleve;
class ElevesController extends Controller
{
        public function index(){
        $datas = Eleve::all();
        return view('pages.eleves',compact('datas'));
    }
}
