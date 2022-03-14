<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;


class donorController extends Controller
{
    function donorAccount(){
        // dd($donor);
        $donor = auth()->user();
        $projects = auth()->user()->projects;
        return view('pages.donorAccount',['donor' => $donor,'projects' => $projects]);
    }
    function donor() {
        $donors = User::where('role', 'donor')->get();
        return view('pages.donor',['donors' => $donors]);
    }
}