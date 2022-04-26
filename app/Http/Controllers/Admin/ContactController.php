<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $contact;

    public function addContact()
    {
        return view('admin.contact.add');
    }
    public function newContact(Request $request)
    {
        Contact::createAbout($request);
        return redirect()->back()->with('message', 'Contact Section Added Successfully.');
    }
    public function manageContact()
    {
        return view('admin.contact.manage', [
            'contacts' => Contact::latest()->get(),
        ]);
    }
    public function editContact($id)
    {
        return view('admin.contact.edit', [
            'contact' => Contact::find($id),
        ]);
    }
    public function updateContact(Request $request, $id)
    {
        Contact::updateAbout($request, $id);
        return redirect('/manage-contact')->with('message', 'Contact Section Updated Successfully.');
    }
    public function deleteContact($id)
    {
        $this->contact = Contact::find($id);
        if (file_exists($this->contact->image))
        {
            unlink($this->contact->image);
        }
        $this->contact->delete();
        return redirect()->back()->with('message', 'Contact Section Deleted Successfully.');
    }
}
