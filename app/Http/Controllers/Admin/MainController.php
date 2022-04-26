<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Main;
use Illuminate\Http\Request;
use function redirect;
use function view;

class MainController extends Controller
{
    protected $main;

    public function addMain()
    {
        return view('admin.main.add');
    }
    public function newMain(Request $request)
    {
        Main::createMain($request);
        return redirect()->back()->with('message', 'Main Section Added Successfully');
    }
    public function manageMain()
    {
        return view('admin.main.manage', [
            'mains' => Main::latest()->get(),
        ]);
    }
    public function editMain($id)
    {
        return view('admin.main.edit', [
            'main' => Main::find($id),
        ]);
    }
    public function updateMain(Request $request, $id)
    {
        Main::updateMain($request, $id);
        return redirect('manage-main')->with('message', 'Main Section Updated Successfully.');
    }
    public function deleteMain($id)
    {
        $this->main = Main::find($id);
        $this->main->delete();
        return redirect()->back()->with('message', 'Main Section Deleted Successfully.');
    }
}
