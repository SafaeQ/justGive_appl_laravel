<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\User;

class AccountController extends Controller
{
    function account(User $user){
        // return $id;
    if(auth()->user()->role == 'admin'){
        return redirect()->route('home');
    }
    // $information = auth()->user();
    if(auth()->user()->role == 'association'){
        // $user = auth()->user();        //condition that allows to get the data that created by association
        $projects = $user->projects;//function to get all data of the projects
        // dd([auth()->user()->id,auth()->user()->name,auth()->user()->email,$projects]);
        return view('pages.account',['projects' => $projects,'information' => $user]); //
    }
    if(auth()->user()->role == 'donor'){
        $donor = $user;
        $projects = $donor->projects;
        return view('pages.donorAccount',['donor' => $donor, 'projects' => $projects]);
    }
    }
}
