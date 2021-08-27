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
        return view('backoffice.layouts.showFormation',compact('formation'));
    }

  public function edit(Formation $id){
        $formation = $id;
        return view('backoffice.layouts.editFormation',compact('formation'));
    }

    public function update(Formation $id, Request $rq){
        request()->validate([
            "nom"=>["required","min:1","max:40"],
            "description"=>["required","min:1","max:40"]
        ]);
        $formation = $id;
        $formation->nom = $rq->nom;
        $formation->description = $rq->description;
        $formation->save();
        return view('backoffice.layouts.showFormation');
    }

    public function destroy(Formation $id){
        $id->delete();
        return redirect(route('backFormations'));
    }  





    public function destroyAll(){
        Formation::truncate();
        return redirect()->back();
    }

}
