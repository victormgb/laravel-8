<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Skill::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skill = new Skill();

        $file_name = time().'_'.$request->source->getClientOriginalName();
        $file_path = $request->file('source')->storeAs('uploads', $file_name, 'public');


        $skill->name = $request->name;
        $skill->source = '/storage/' . $file_path;
        $skill->save();

        return $skill;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        return $skill;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $skill = Skill::find($request->id);
        $skill->name = $request->name;
        if($request->source) {
            $file_name = time().'_'.$request->source->getClientOriginalName();
            $file_path = $request->file('source')->storeAs('uploads', $file_name, 'public');

            $skill->source = '/storage/' . $file_path;
        }

        $skill->save();

        return $skill;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        Skill::destroy($skill->id);
        return true;
    }
}
