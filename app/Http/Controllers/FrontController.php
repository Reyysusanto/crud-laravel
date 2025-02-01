<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index(){
        $projects = Project::orderBy('id', 'desc')->get();
        return view('front.index', [
            'projects' => $projects
        ]);
    }

    public function details(Project $project){
        return view('front.detail', [
            'project' => $project
        ]);
    }

    public function book(){
        return view('front.book');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|max:150',
            'category' => 'required|string',
            'budget' => 'required|integer',
            'brief' => 'required|string|max:65535'
        ]);

        DB::beginTransaction();

        try{
            $newProject = ProjectOrder::create($validated);

            DB::commit();

            return redirect()->route('front.index')->with('success', 'Project created succesfully');
        } catch(\Exception $err){
            DB::rollBack();
            
            return redirect()->back()->with('error', 'System error!'.$err->getMessage());
        }
    }
}
