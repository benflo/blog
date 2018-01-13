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
    public function create(){
        return view('admin.articles.add');
    }

    public function store(Request $request){

        $titre = $request->titre;
        $contenu = $request->contenu;

        $articles = new Articles([
            'titre' => $titre,
            'contenu' => $contenu,
            'user_id' => Auth::user()->getAuthIdentifier(),
        ]);

        $articles->save();

        echo json_encode($articles);
        die;
    }

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
    public function update(Request $request){
        $articles=new Articles([
            'titre'=>$request->get('titre'),
            'contenu'=>$request->get('contenu'),
            'user_id'=>Auth::user()->getAuthIdentifier(),
        ]);
        $articles->save();
        return redirect()->route('articles')->with('success','L\'article a été créé');
    }

    public function show(Request $request){
        $id = $request->id;
        $article = Articles::find($id);

        return view('front.articles.show', [
            'article' => $article
        ]);
    }

    public function activation(Request $request, $id)
    {
        $active = $request->active;
        $article = Articles::find($id);
        if ($active === null){
            $active = 0;
        } else {
            $active = 1;
        }
        $article->active = $active;

        $article->save();

        return redirect()->route('admin');
    }

    public function delete($id){
        $article=Articles::find($id);

        $article->delete();

        return redirect()->route('admin');

    }


}
