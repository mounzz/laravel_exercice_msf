<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class backFormationsController extends Controller
{
    public function update(Request $request, $id){
        $formations = formations::find($id);
        $formations -> nom = $request -> nom;
        $formations -> description = $request -> description;
        $eleves -> save();
        return redirect()->back();
    }
}
