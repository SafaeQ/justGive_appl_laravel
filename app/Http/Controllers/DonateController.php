<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\donate;
use App\Models\Project;

class DonateController extends Controller
{

    function index(Request $request,Project $project) {
        return view('pages.donate',["project"=>$project]);
    }

    public function getdonate() {
        return view('pages.donate');
    }

    public function projectDonateAction(Request $request) {
        // $input = $request->only('amount');
        $this->validate($request, [
            'amount'  => 'required|numeric',
            'projects_id' => 'required|numeric',
        ]);

        $donate = donate::create([
            // 'donor' => auth()->user(),
            'amount' => $request->amount,
            'projects_id' => $request->projects_id,
            'users_id' => auth()->user()->id,
        ]);
        return redirect()->back()->with('success', []);




    }






    public function donation(){

        return redirect()->back();
    }


}
