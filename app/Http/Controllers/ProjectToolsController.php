<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectTools;
use App\Models\Tool;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProjectToolsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Project $project)
    {
        $tool = Tool::orderBy('id', 'desc')->get();
        return view('admin.project_tools.create', [
            'tools' => $tool,
            'project' => $project
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Project $project)
    {
        $validated = $request->validate([
            'tool_id' => 'required|integer',
        ]);

        DB::beginTransaction();

        try{
            
            $validated['project_id'] = $project->id;
            $assignTool = ProjectTools::create($validated);

            DB::commit();
            return redirect()->back()->with('success', 'Tools assigned succesfully');

        } catch(\Exception $err){
            DB::rollBack();
            
            return redirect()->back()->with('error', 'System error!'.$err->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectTools $projectTools)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectTools $projectTools)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectTools $projectTools)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectTools $projectTools)
    {
        //
    }
}
