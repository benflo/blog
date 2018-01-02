<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use Intervention\Image\Image;


class AjoutArticlesController extends Controller
{
    public function create(){
        return view('ajoutarticle');
    }
    public function image(){
    $images=Image::all();
    return view('images',compact('images'));
    }
}

