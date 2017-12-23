<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\AjoutArticles;
use App\Articles;
use App\Commentaires;
use illuminate\http\request;
use App\User;

class ArticlesController extends Controller
{
    public function afficheArticles(){
            $articles=Articles::all();
            $commentaires=Commentaires::all();

            return view('articles')->with('articles',$articles)->with( 'commentaires',$commentaires);



    }
    public function index()
    {

        $articles = Articles::where('active',1)->orderBy('created_at','desc')->paginate(5);
        //entête page
        $titre = 'Derniers Article';

        return view('article')->with('Articles',$articles)->with('Title',$titre);
    }

    public function store(Request $request){

        $articles=new Articles([
            'titre'=> $request->input('titre'),
            'contenu'=>$request->input('contenu'),
            'auteur'=>Auth::user()->getAuthIdentifierName(),
            'user_id'=>Auth::user()->getAuthIdentifier(),
        ]);
        $articles->save();

    }
    public function update(Request $request){
        $articles=new Articles([
            'titre'=>$request->get('titre'),
            'contenu'=>$request->get('contenu'),
            'user_id'=>Auth::user()->getAuthIdentifier(),
        ]);
        $articles->save();
        return redirect()->route('articles')->with('success','L\'article a été créé');
    }
    public function delete(){
        $article=App\Articles::find(1);
        $article->delete();
    }


}
