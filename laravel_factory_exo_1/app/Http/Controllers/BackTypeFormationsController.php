<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeFormation;

class BackTypeFormationsController extends Controller
{
       public function  index(){
        $datas = TypeFormation::all();
        return view('backoffice.backTypeFormations',compact('datas'));
    }

    public function show(TypeFormation $id){
        $typeformation = $id;
        return view('backoffice.layouts.showTypeFormation',compact('typeformation'));
    }

  public function edit(TypeFormation $id){
        $typeformation = $id;
        return view('backoffice.layouts.editTypeFormation',compact('typeformation'));
    }

    public function update(TypeFormation $id, Request $rq){
        request()->validate([
            "nom"=>["required","min:1","max:40"],
        ]);
        $typeformation = $id;
        $typeformation->nom = $rq->nom;
        $typeformation->save();
        return view('backoffice.layouts.showTypeFormation');
    }

    public function destroy(TypeFormation $id){
        $id->delete();
        return redirect(route('backTypeFormations'));
    }  





    public function destroyAll(){
        TypeFormation::truncate();
        return redirect()->back();
    }

}
