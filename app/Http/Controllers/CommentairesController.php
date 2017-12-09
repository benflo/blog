<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Commentaire;

class CommentairesController extends Controller
{
    public function index()
    {

        return view('Commentaire');
    }
    public function store(Request $request){
        $commentaires=new commentaire([
            'commentaire'=>$request->input('commentaire'),
            'user_id'=>Auth::user(),
        ]);
        $commentaires->save();

    }
    public function update(Request $request){
        $commentaires=new commentaire([

            'commentaire'=>$request->get('commentaire'),
            'user_id'=>Auth::user()->id,
        ]);
        $commentaires->save();
    }
    public function delete(){
    $commentaires=App\Commentaire::find(1);

    $commentaires->delete();

    }
}
