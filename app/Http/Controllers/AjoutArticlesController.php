<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
class AjoutArticlesController extends Controller
{
    public function create(){
        return view('ajoutarticle');
    }

}

