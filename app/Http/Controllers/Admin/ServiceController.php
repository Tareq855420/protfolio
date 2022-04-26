<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected $service;

    public function addService()
    {
        return view('admin.service.add');
    }
    public function newService(Request $request)
    {
        Service:: createService($request);
        return redirect()->back()->with('message', 'Service Added Successfully.');
    }
    public function manageService()
    {
        return view('admin.service.manage', [
           'services'=> Service::latest()->get(),
        ]);
    }
    public function editService($id)
    {
        return view('admin.service.edit', [
           'service' => Service::find($id),
        ]);
    }
    public function updateService(Request $request, $id)
    {
        Service::updateService($request, $id);
        return redirect('/manage-service')->with('message', 'Service Updated Successfully.');
    }
    public function deleteService($id)
    {
        $this->service = Service::find($id);
        $this->service->delete();
        return redirect()->back()->with('message', 'Service Deleted Successfully.');
    }
}
