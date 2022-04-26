<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    protected $skill;

    public function addSkill()
    {
        return view('admin.skill.add');
    }

    public function newSkill(Request $request)
    {
        Skill::createSkill($request);
        return redirect()->back()->with('message', 'Skill Section Added Successfully');
    }

    public function manageSkill()
    {
        return view('admin.skill.manage', [
            'skills' => Skill::latest()->get(),
        ]);
    }

    public function editSkill($id)
    {
        return view('admin.skill.edit', [
            'skill' => Skill::find($id),
        ]);
    }

    public function updateSkill(Request $request, $id)
    {
        Skill::updateSkill($request, $id);
        return redirect('manage-skill')->with('message', 'Skill Section Updated Successfully.');
    }

    public function deleteSkill($id)
    {
        $this->skill = Skill::find($id);
        $this->skill->delete();
        return redirect()->back()->with('message', 'Skill Section Deleted Successfully.');
    }
}
