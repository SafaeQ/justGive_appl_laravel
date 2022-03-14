<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\activitie;
use App\Http\Controllers\ActivitieController;
use App\Models\category;



class ProjectController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'category' => 'exists:category,id|required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'budget' => 'integer|required',
        ]);
        //
    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('app_images'), $imageName);
    $project = Project::create([
           'name' => $request->name,
           'category_id' => $request->category,
           'association_id' => auth()->user()->id,
           'description' => $request->description,
           'image' => $imageName,
           'budget' => $request->budget,
       ]);
       return redirect()->route('project',[$project->id]);


    }
function project(Project $project){
    // $projects = auth()->user()->projects;
    // dd([$project->name]);
    $activity = activitie::where("projects_id",$project->id)->get();
    return view('pages.project',['project' => $project, 'activitie' => $activity]);

}

////////////edit  //////////////


public function edit(Project $project)
    {
        // dd(["proj-asoc_id"=>$project->association_id,"user_id"=>auth()->user()->id]);
        $categories = category::all();
        return view('pages.editProject',['project' => $project,'categories' => $categories]); // compact create an array that containt an var with thier value
    }

public function update(Request $request, Project $project)
{

    request()->validate([
        'name' => 'required',
        'category' => 'exists:category,id|required',
        'description' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg|max:2048',//image maxix required f update 7it i9der ikon mabghach ibdelha
        'budget' => 'integer|required',
    ]);

    // dd([$request->get('name'),$request->get('budget'),$request->get('description')]);
        $project->name = $request->get('name');
        $project->category_id = $request->get('category');
        $project->budget = $request->get('budget');
        $project->description = $request->get('description');

        $project->save();
    // $project->update(extract($project));
    return redirect()->route('project',[$project->id])->with('success','Project updated successfully');
}

//*********************************************delete Project*************************************************** */


public function destroy(Project $project)
{

    // dd('$project');
    $project->delete();
    return redirect()->route('home')->with('success','Project deleted successfully');
}
//////////////////////////////////////////////////////////

function addProject() {
    // dd([auth()->user()->id,auth()->user()->email]);
    $categories = category::all();
    $project = Project::all();
    // $comments = comment::all();
    return view('pages.addProject', ['categories' => $categories, 'project' => $project]);
}


}
