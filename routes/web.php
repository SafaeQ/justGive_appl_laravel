<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Models\Project;
use App\Models\User;
use App\Http\Controllers\ActivitieController;
use App\Models\Activitie;
use App\Http\Controllers\ArticleController;
use App\models\Article;
use App\models\category;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\donorController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\commentController;
use App\Http\Controllers\AboutController;


// use App\Models\Assosiation;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [App\Http\Controllers\homeController::class,'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/donorAccount',[donorController::class, 'donorAccount'])->name('donorAccount')->middleware('auth');
Route::get('/donor', [donorController::class, 'donor'])->name('donor');

Route::get('/blog', [BlogController::class, 'blog']);
Route::get('/account/{user}',[AccountController::class, 'account'])->middleware('auth')->name('account');


Route::get('/contact', [ContactController::class, 'index'])->name('contact');


//******************************** CRUD of comment********************************//
Route::post('/project/{project}',[commentController::class, 'store']);
Route::get('/project/{project}',[commentController::class, 'index'])->name('project');
Route::get('/project/{project}',[commentController::class, 'create']);
Route::get('/project/{project}',[commentController::class, 'update']);
Route::get('/project/{project}',[commentController::class, 'destroy']);


//******************************** END CRUD ********************************//
//******************************** CRUD of project********************************//

Route::get('/project/{project}',[ProjectController::class, 'project'])->name('project');
Route::get('/addProject',[ProjectController::class, 'addProject'])->middleware(['auth','ifAssociation'])->name('addProject'); // another middleware tha allows association to add projects
Route::post('/addProject',[ProjectController::class, 'store']);
Route::get('/editProject/{project}',[ProjectController::class,'edit'])->name('editProject');
Route::post('/editProject/{project}',[ProjectController::class, 'update']);//->middleware(['auth','ifAssociation']);
Route::delete('/project/{project}',[ProjectController::class,'destroy']);


//******************************** END CRUD of project********************************//


//******************************** Authentification********************************//
Route::get('/login',[UserAuthController::class, 'login'])->middleware(['guest'])->name('auth.signin');
Route::post('/login',[UserAuthController::class, 'check']);
Route::get('/logout',[UserAuthController::class, 'logout'])->middleware(['auth'])->name('auth.signout');
Route::get('/signup/association',[UserAuthController::class, 'associationSignup'])->middleware(['guest'])->name('signup.association');
Route::post('/signup/association',[UserAuthController::class, 'associationRegister']);
Route::get('/signup/donor',[UserAuthController::class, 'donorSignup'])->middleware(['guest'])->name('signup.donor');
Route::post('/signup/donor',[UserAuthController::class, 'donorRegister']);
//******************************** end********************************//

//******************************** Activity********************************//
Route::get('/createActivity', [ActivitieController::class, 'createActivity'])->middleware(['auth','ifAssociation'])->name('createActivity');
Route::post('/createActivity',[ActivitieController::class, 'activity']);
Route::get('/activities/{activitie}', [ActivitieController::class , 'getActivity'])->middleware('auth', 'ifAssociation')->name('activities');
Route::get('/editActivity/{activitie}', [ActivitieController::class, 'edit'])->middleware('auth', 'ifAssociation')->name('editActivity');
Route::post('/editActivity/{activitie}',[ActivitieController::class, 'update'])->middleware('auth', 'ifAssociation');
Route::delete('/activities/{activitie}', [ActivitieController::class, 'delete'])->middleware('auth', 'ifAssociation');
//******************************** end********************************//

//******************************** article********************************//
Route::get('/createArticle',[ArticleController::class, 'addArticle'])->middleware(['auth','ifAssociation'])->name('createArticle');
Route::post('/createArticle', [ArticleController::class, 'createArticle']);
Route::get('/article/{article}',[ArticleController::class, 'getArticle'])->name('article');

//******************************** end********************************//


//******************************** Donate********************************//
Route::get('/project/{project}/donate',[DonateController::class, 'index'])->name('donate');
Route::post('/project/{project}/donate', [DonateController::class, 'projectDonateAction'])->middleware(['auth']);


//******************************** end********************************//
