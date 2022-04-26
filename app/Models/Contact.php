<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected static $contact;
    protected static $image;
    protected static $imageName;
    protected static $imagePath;
    protected static $imageUrl;

    public static function createAbout($request)
    {
        self::$image = $request->file('image');
        self::$imageName = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
        self::$imagePath = 'admin-assets/image/';
        self::$image->move(self::$imagePath,self::$imageName);
        self::$imageUrl = self::$imagePath.self::$imageName;

        self::$contact = new Contact();
        self::$contact->address = $request->address;
        self::$contact->email = $request->email;
        self::$contact->number = $request->number;
        self::$contact->site = $request->site;
        self::$contact->image = self::$imageUrl;
        self::$contact->status = $request->status;
        self::$contact->save();
    }
    public static function updateAbout($request, $id)
    {
        self::$contact = Contact::find($id);

        self::$image = $request->file('image');
        if (self::$image)
        {
            if (file_exists(self::$contact->image))
            {
                unlink(self::$contact->image);
            }
            self::$imageName = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
            self::$imagePath = 'admin-assets/image/';
            self::$image->move(self::$imagePath,self::$imageName);
            self::$imageUrl = self::$imagePath.self::$imageName;
        }
        else
        {
            self::$imageUrl = self::$contact->image;
        }
        self::$contact->address = $request->address;
        self::$contact->email = $request->email;
        self::$contact->number = $request->number;
        self::$contact->site = $request->site;
        self::$contact->image = self::$imageUrl;
        self::$contact->status = $request->status;
        self::$contact->save();
    }
}
