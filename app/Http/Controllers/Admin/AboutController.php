<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    protected $about;

    public function addAbout()
    {
        return view('admin.about.add');
    }
    public function newAbout(Request $request)
    {
        About::createAbout($request);
        return redirect()->back()->with('message', 'About Section Added Successfully.');
    }
    public function manageAbout()
    {
        return view('admin.about.manage', [
            'abouts' => About::latest()->get(),
        ]);
    }
    public function editAbout($id)
    {
        return view('admin.about.edit', [
            'about' => About::find($id),
        ]);
    }
    public function updateAbout(Request $request, $id)
    {
        About::updateAbout($request, $id);
        return redirect('/manage-about')->with('message', 'About Section Updated Successfully.');
    }
    public function deleteAbout($id)
    {
        $this->about = About::find($id);
        if (file_exists($this->about->image))
        {
            unlink($this->about->image);
        }
        if (file_exists($this->about->resume))
        {
            unlink($this->about->resume);
        }
        $this->about->delete();
        return redirect()->back()->with('message', 'About Section Deleted Successfully.');
    }
}
