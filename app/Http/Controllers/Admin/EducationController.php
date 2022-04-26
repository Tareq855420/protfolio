<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    protected $education;

    public function addEducation()
    {
        return view('admin.education.add');
    }
    public function newEducation(Request $request)
    {
        Education::createEdu($request);
        return redirect()->back()->with('message', 'Education Section Added Successfully');
    }
    public function manageEducation()
    {
        return view('admin.education.manage', [
            'educations' => Education::latest()->get(),
        ]);
    }
    public function editEducation($id)
    {
        return view('admin.education.edit', [
            'education' => Education::find($id),
        ]);
    }
    public function updateEducation(Request $request, $id)
    {
        Education::updateEdu($request, $id);
        return redirect('manage-education')->with('message', 'Education Section Updated Successfully.');
    }
    public function deleteEducation($id)
    {
        $this->education = Education::find($id);
        $this->education->delete();
        return redirect()->back()->with('message', 'Education Section Deleted Successfully.');
    }
}
