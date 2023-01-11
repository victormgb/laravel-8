<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectSkill;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Project::with('skills')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project();

        $file_name = time().'_'.$request->url_thumbnail->getClientOriginalName();
        $file_path = $request->file('url_thumbnail')->storeAs('uploads', $file_name, 'public');


        $project->name = $request->name;
        $project->url_thumbnail = '/storage/' . $file_path;
        $project->url_github = $request->url_github;
        $project->save();
        if($request->skills) {
            $skills = explode(",", $request->skills);
            foreach($skills as $skill) {
                $projectSkill = new ProjectSkill();
                $projectSkill->project_id = $project->id;
                $projectSkill->skill_id = $skill;
                $projectSkill->save();
            }
        }

        return $project;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::with('skills')->find($id);
        return $project;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::find($request->id);
        $project->name = $request->name;
        if($request->url_thumbnail) {
            $file_name = time().'_'.$request->url_thumbnail->getClientOriginalName();
            $file_path = $request->file('url_thumbnail')->storeAs('uploads', $file_name, 'public');

            $project->url_thumbnail = '/storage/' . $file_path;
        }

        

        if($request->skills) {
            $skills = explode(",", $request->skills);
            $projectSkillExist = ProjectSkill::where('project_id', $id)->get()->toArray();
            $projectSkillIds = array_column($projectSkillExist, 'id');

            // Eliminar los que no existen actualmente en el array que viene
            foreach($projectSkillIds as $projectSkillId) {
                if(!in_array($projectSkillId, $skills)) {
                    ProjectSkill::destroy($projectSkillId);
                }
            }

            // agregar los que no 
            foreach($skills as $skill) {
                if(!in_array($skill,$projectSkillIds )) {
                    $projectSkill = new ProjectSkill();
                    $projectSkill->project_id = $id;
                    $projectSkill->skill_id = $skill;
                    $projectSkill->save();
                }
            }
        }

        $project->save();

        return $project;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::destroy($id);
        return true;
    }
}
