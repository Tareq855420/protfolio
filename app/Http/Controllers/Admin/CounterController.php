<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    protected $counter;

    public function addCounter()
    {
        return view('admin.counter.add');
    }
    public function newCounter(Request $request)
    {
        Counter::createCounter($request);
        return redirect()->back()->with('message', 'Counter Section Added Successfully');
    }
    public function manageCounter()
    {
        return view('admin.counter.manage', [
            'counters' => Counter::latest()->get(),
        ]);
    }
    public function editCounter($id)
    {
        return view('admin.counter.edit', [
            'counter' => Counter::find($id),
        ]);
    }
    public function updateCounter(Request $request, $id)
    {
        Counter::updateCounter($request, $id);
        return redirect('manage-counter')->with('message', 'Counter Section Updated Successfully.');
    }
    public function deleteCounter($id)
    {
        $this->counter = Counter::find($id);
        $this->counter->delete();
        return redirect()->back()->with('message', 'Counter Section Deleted Successfully.');
    }
}
