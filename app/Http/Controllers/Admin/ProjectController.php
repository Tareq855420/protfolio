<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    protected $project;

    public function addProject()
    {
        return view('admin.project.add');
    }
    public function newProject(Request $request)
    {
        Project::createProject($request);
        return redirect()->back()->with('message', 'Project Section Added Successfully.');
    }
    public function manageProject()
    {
        return view('admin.project.manage', [
            'projects' => Project::latest()->get(),
        ]);
    }
    public function editProject($id)
    {
        return view('admin.project.edit', [
            'project' => Project::find($id),
        ]);
    }
    public function updateProject(Request $request, $id)
    {
        Project::updateProject($request, $id);
        return redirect('/manage-project')->with('message', 'Project Section Updated Successfully.');
    }
    public function deleteProject($id)
    {
        $this->project = Project::find($id);
        if (file_exists($this->project->image))
        {
            unlink($this->project->image);
        }
        $this->project->delete();
        return redirect()->back()->with('message', 'Project Section Deleted Successfully.');
    }
}
