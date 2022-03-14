<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Project;
use App\models\Article;

class HomeController extends Controller
{
    //
    public function index(){
        $projects = Project::limit(4)->get();
        $association = User::where("role","association")->get();
        // $donors = User::where("role","donor")->get();
        $articles = Article::limit(4)->get();
        return view('pages.home',['projects' => $projects,'associations' => $association, 'articles'=>$articles]); //projects that we named for $projects
    }




}