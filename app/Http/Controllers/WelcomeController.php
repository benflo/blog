<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use App\Commentaires;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $articles = Articles::where('active', 1)->get();
        $lastArticle = DB::table('articles')->where('active', 1)->latest()->first();

        $lastArticleComment = null;
        if (isset($lastArticle)) {
            $lastArticleComment = Commentaires::where('article_id', $lastArticle->id)->get();
        }

        return view('front.index', [
            'articles' => $articles,
            'commentaires' => $lastArticleComment,
            'lastArticle' => $lastArticle
        ]);
    }

    public function commentaire(request $request){
        $lastArticle = DB::table('articles')->latest()->first();

        $commentaires=new Commentaires([
            'commentaire'=> $request->input('commentaire'),
            'article_id'=> $lastArticle->id,
        ]);
        $commentaires->save();

        return redirect()->route('welcome');
    }
}
