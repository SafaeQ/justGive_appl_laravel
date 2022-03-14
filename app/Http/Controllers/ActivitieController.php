<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activitie;
use App\Http\Controllers\ActivitieController;
use App\Models\project;
class ActivitieController extends Controller
{
    //
    function activity(Request $request){
        // dd($request);
        $this->validate($request, [
            'name' => 'required',
            'date' => 'date|required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'projects_id' => 'required',

        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('app_images'), $imageName);
    //    dd($request->projects);
        $newActivie = Activitie::create([
            'name' => $request->name,
            'date' => $request->date,
            'description' => $request->description,
            'image' => $imageName,
            'projects_id' => $request->projects_id ?? 1,  //
            'status' => '0',
        ]);
     return redirect()->route('activities',[$newActivie->id]);
    }

    function getActivity(Activitie $activitie){
        // dd("get activity");
        // return $activitie->id ."- ".$activitie->name;
        $projects = Project::all();
        return view('pages.activities',['activity'=>$activitie, 'projects' => $projects]);

    }

    public function edit (Activitie $activitie)
    {
        // dd([auth()->user(), $activitie ,$activitie->project]);
        if(auth()->user()->id === $activitie->project->association_id ){
        return view('pages.editActivity',['activity'=>$activitie]);
        }
        return back();
    }

    public function update(Request $request, Activitie $activitie)
    {
        if(auth()->user()->id === $activitie->project->association_id ){

            request()->validate([
                'name' => 'required',
                'date' => 'date|required',
                'description' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $activitie->name = $request->name;
            $activitie->date = $request->date;
            $activitie->description = $request->description;
            if($request->has('image')){
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('app_images'), $imageName);
                $activitie->image = $imageName;
            }

            $activitie->save();


            return redirect()->route('activities',[$activitie->id]);
        }
        return back();
    }

    public function delete(Activitie $activitie){

        $activitie->delete();

    return redirect()->route('project',[$activitie->projects_id]);
    }


    //////////////////////////////////////////////////////////
    function createActivity(){
        $user = auth()->user();
        $projects = Project::where('association_id',$user->id)->get();
        return view('pages.createActivity',["projects"=>$projects]);
    }
}
