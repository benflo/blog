<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Commentaires;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Comment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authId = Auth::id();
        $articles = Articles::where('user_id', $authId)->get();
        $lastCommentaires = Commentaires::orderBy('created_at', 'desc')->take(3)->get();

        return view('admin.index', [
            'articles'=> $articles,
            'commentaires'=>$lastCommentaires,
        ]);
    }

}
