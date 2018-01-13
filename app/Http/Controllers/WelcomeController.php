<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use App\Commentaires;
use  Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $articles = Articles::all();
        $commentaires = Commentaires::all();
        $lastArticle = DB::table('articles')->latest()->first();

        return view('front.index', [
            'articles' => $articles,
            'commentaires' => $commentaires,
            'lastArticle' => $lastArticle
        ]);
    }

    public function commentaire(request $request){

        // si invité
        if (Auth::user() === null) {
            $user_id = null;
        } else {
            $user_id = Auth::user()->getAuthIdentifier();
        }

        $commentaires=new Commentaires([
            'commentaire'=> $request->input('commentaire'),
            'user_id'=> $user_id,
        ]);

        $commentaires->save();

        return redirect()->route('welcome');
    }
}
