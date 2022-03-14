<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ArticleController;
use App\models\Article;

class ArticleController extends Controller
{
 public function createArticle(Request $request){
     $this->validate($request, [
         'title' => 'required',
         'content' => 'required',
         'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
     ]);

     $imageName = time().'.'.$request->image->extension();
     $request->image->move(public_path('app_images'), $imageName);

     $newArticle = Article::create([
         'title' => $request->title,
         'content' => $request->content,
         'image' => $imageName,
         'projects_id' => $request->projects ?? 1,
     ]);

     return redirect()->route('article',[$newArticle->id]);
 }

 public function getArticle(Article $article) {
    // dd($article);
    return view('pages.article',['article'=> $article]);

 }

 public function editArticle(Article $article){
    return view('pages.article');
 }



 public function update(Request $request, Article $article) {

 }


 public function deleteArticle(Article $article){

 }

 ////////////////////////////////////////////////////////////////////////////////////////////////
 function addArticle(){
    return view ('pages.createArticle');
}
    //
}