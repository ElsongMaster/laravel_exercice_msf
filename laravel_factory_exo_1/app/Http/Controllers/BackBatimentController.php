<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batiment;
class BackBatimentController extends Controller
{
       public function  index(){
        $datas = Batiment::all();
        return view('backoffice.backBatiment',compact('datas'));
    }


    public function show(Batiment $id){
        $batiment = $id;
        return view('backoffice.layouts.showBatiment',compact('batiment'));
    }
    public function edit(Batiment $id){
        $batiment = $id;
        return view('backoffice.layouts.editBatiment',compact('batiment'));
    }

    public function update(Batiment $id, Request $rq){
        request()->validate([
            "nom"=>["required","min:1","max:40"],
            "description"=>["required","min:1","max:40"]
        ]);
        $batiment = $id;
        $batiment->nom = $rq->nom;
        $batiment->description = $rq->description;
        $batiment->save();
        return view('backoffice.layouts.showBatiment');
    }

    public function destroy(Batiment $id){
        $id->delete();
        return redirect(route('backBatiment'));
    }  




    public function destroyAll(){
        Batiment::truncate();
        return redirect()->back();
    }

}
