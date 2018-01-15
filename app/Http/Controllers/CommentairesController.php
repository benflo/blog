<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use App\Commentaires;
use Illuminate\Support\Facades\Auth;
use App\Articles;

class CommentairesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request){
        $commentaires=new Commentaires([
            'auteur'=>Auth::user()->getAuthIdentifierName(),
            'commentaire'=>$request->input('commentaire'),
            'article_id'=>Articles::with('id'),
        ]);
        $commentaires->save();

    }
    public function show(Request $request){
        $id = $request->id;
        $commentaire = Commentaires::find($id);

        return view('admin.commentaires.edit', compact('commentaire'));
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $message = Commentaires::find($id);
        $message->commentaire = $request->input('commentaire');

        $message->save();

        return redirect()->route('commentaire.edit', ['id' => $id]);
    }

   public function delete($id){
       $commentaires = Commentaires::find($id);
       $commentaires->delete();

       return redirect()->route('admin');
   }
}
