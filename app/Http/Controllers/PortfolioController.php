<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Skill;


class PortfolioController extends Controller
{
    public function index(){
        $projects = Project::with('skills')->get();
        $skills =  Skill::get();
        
        return view('portfolio', with(['projects' => $projects, 'skills' => $skills]));
        
    }
}
