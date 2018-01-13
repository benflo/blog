<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Commentaires;
use Illuminate\Support\Facades\Auth;
use App\Articles;

class CommentairesController extends Controller
{

    public function store(Request $request){
        $commentaires=new Commentaires([
            'auteur'=>Auth::user()->getAuthIdentifierName(),
            'commentaire'=>$request->input('commentaire'),
            'article_id'=>Articles::with('id'),
        ]);
        $commentaires->save();

    }
    public function update(){

        $commentaires=Commentaires::all();

        return view('commentaire',compact('commentaires'));
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
   public function destroy($id){
       $commentaires = Commentaires::find($id);

       $commentaires->delete();
    }
}
