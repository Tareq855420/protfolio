<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FooterBanner;
use Illuminate\Http\Request;

class FooterBannerController extends Controller
{
    protected $banner;

    public function addBanner()
    {
        return view('admin.banner.add');
    }
    public function newBanner(Request $request)
    {
        FooterBanner::createBanner($request);
        return redirect()->back()->with('message', 'Banner Section Added Successfully.');
    }
    public function manageBanner()
    {
        return view('admin.banner.manage', [
            'banners' => FooterBanner::latest()->get(),
        ]);
    }
    public function editBanner($id)
    {
        return view('admin.banner.edit', [
            'banner' => FooterBanner::find($id),
        ]);
    }
    public function updateBanner(Request $request, $id)
    {
        FooterBanner::updateBanner($request, $id);
        return redirect('/manage-banner')->with('message', 'Banner Section Updated Successfully.');
    }
    public function deleteBanner($id)
    {
        $this->banner = FooterBanner::find($id);
        if (file_exists($this->banner->image))
        {
            unlink($this->banner->image);
        }
        $this->banner->delete();
        return redirect()->back()->with('message', 'Banner Section Deleted Successfully.');
    }
}
