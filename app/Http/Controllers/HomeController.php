<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Skill;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Resources\SkillResource;
use App\Http\Resources\ProjectResource;

class HomeController extends Controller
{
    public function index() {
        $skills = SkillResource::collection(Skill::all());
        $projects = ProjectResource::collection(Project::with('skill')->get());
        return Inertia::render('Home', compact('skills', 'projects'));
    }
}
