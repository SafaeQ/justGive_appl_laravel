<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;




class UserAuthController extends Controller
{
    //****************************login***********************************/
    function login(){
        return view('pages.auth.login');
    }
    function check(Request $request){           // check is a function that make an authentificate
        $this->validate($request, [             //validate is make login and validate at the same time
            'email' => 'required|email',
            'password' => 'required|min:4',
        ]);
        $auth = ($request->only("email","password"));
        if(Auth::attempt($auth,$request->remember)){        //login returns true or false if user log in
            return redirect()->route('account',auth()->user()->id);
        }else{
            return back();
        }
    }
/***************************************association's register and login directly************************************/
    function associationSignup(){
        return view('pages.auth.association-signup');
    }

    function associationRegister (Request $request) {
        // dd($request);
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users', //to make the user has one email and back it to the page sign
            'password' => 'required',
            'adress' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048|required',
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('app_images'), $imageName);
        // $sign = ($request->only("name","email","password","adress","description"));
        $user = User::create([              //add a new user with model user
            'name' => $request->name,
            'email' => $request->email,
            'password' =>Hash::make($request->password) , // to hashed the password
            'adress' => $request->adress,
            'description' =>$request->description,
            'image' => $imageName,
            'role'=>'association'
        ]);
        $auth = $request->only("email","password");
        Auth::attempt($auth);
        return redirect()->route('account',[$user->id]);
        // dd([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => $request->password,
        //     'adress' => $request->adress,
        //     'description' =>$request->description,
        //     'role'=>'association'
        // ]);
    }

    /***********************************Donor's signup and login directlty ***************************************/

    function donorSignup(){
        return view('pages.auth.donor-signup');
    }

    function donorRegister(Request $request){
        $this->validate($request, [     //we valodate the request
            'name' => 'required',
            'email' => 'email|unique:users|required',
            'password' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048|required',
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('app_images'), $imageName);


// dd($request->image);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $imageName,
            'role'=>"donor"
        ]);
        $auth = $request->only("email","password");

        Auth::attempt($auth);
        return redirect()->route('home');
    }
    //////////////////////////////logout/////////////////////////////////
    function logout(Request $request)
    {
        auth()->logout();
        return redirect()->route("auth.signin");
    }



}