<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleve;
class BackElevesController extends Controller
{
       public function  index(){
        $datas = Eleve::all();
        return view('backoffice.backEleves',compact('datas'));
    }

        public function show(Eleve $id){
        $eleve = $id;
        return view('backoffice.layouts.showEleve',compact('eleve'));
    }

   public function edit(Eleve $id){
        $Eleve = $id;
        return view('backoffice.layouts.editEleve',compact('Eleve'));
    }

    public function update(Eleve $id, Request $rq){
        request()->validate([
            "nom"=>["required","min:1","max:40"],
            "prenom"=>["required","min:1","max:40"],
            "age"=>["required","numeric"],
            // "etat"=>["required","boolean"]

        ]);
        $Eleve = $id;
        $Eleve->nom = $rq->nom;
        $Eleve->description = $rq->description;
        $Eleve->save();
        return view('backoffice.layouts.showEleve');
    }

    public function destroy(Eleve $id){
        $id->delete();
        return redirect(route('backEleves'));
    }  





    public function destroyAll(){
        Eleve::truncate();
        return redirect()->back();
    }


}
