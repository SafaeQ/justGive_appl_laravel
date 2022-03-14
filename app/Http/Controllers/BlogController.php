<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Article;

class BlogController extends Controller
{
    function blog() {
        $article = Article::all();
        // dd($activity);
        return view('pages.blog',['article' =>$article]);
    }
}