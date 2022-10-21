<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{

    public function getProjects()
    {
        $projects = Project::all();

        return response()->json([
            'status' => 200,
            'projects' => $projects,
        ]);
    }

    public function addProject(Request $request)
    {
        $project = new Project();
        $project->Projectname = $request->input('Projectname');
        $project->ClientName = $request->input('ClientName');
        $project->GanteChartPic = $request->input('GanteChartPic');
        $project->status = $request->input('status');
        $project->save();

        return response()->json([
            'status' => 200,
            'project' => $project,
        ]);
    }


    public function updateProject(Request $request, $id)
    {
        $project = Project::where('idNo', $id);
        $project->Projectname = $request->input('Projectname');
        $project->ClientName = $request->input('ClientName');
        $project->GanteChartPic = $request->input('GanteChartPic');
        $project->status = $request->input('status');
        $input = $request->all();
        $project->update($input);

        return response()->json([
            'status' => 200,
            'project' => $project,
        ]);
    }

    public function deleteProject($id)
    {
        $project = Project::where('idNo', $id);
        $project->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Projectrecord deleted successfully'
        ]);
    }
}
