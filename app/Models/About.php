<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected static $about;
    protected static $image;
    protected static $imageName;
    protected static $imagePath;
    protected static $imageUrl;

    protected static $resume;
    protected static $resumeName;
    protected static $resumePath;
    protected static $resumeUrl;

    public static function createAbout($request)
    {
        self::$image = $request->file('image');
        self::$imageName = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
        self::$imagePath = 'admin-assets/image/';
        self::$image->move(self::$imagePath,self::$imageName);
        self::$imageUrl = self::$imagePath.self::$imageName;

        self::$resume = $request->file('resume');
        self::$resumeName = time().rand(10, 1000).'.'.self::$resume->getClientOriginalExtension();
        self::$resumePath = 'admin-assets/file/';
        self::$resume->move(self::$resumePath,self::$resumeName);
        self::$resumeUrl = self::$resumePath.self::$resumeName;

        self::$about = new About();
        self::$about->name = $request->name;
        self::$about->birthDate = $request->birthDate;
        self::$about->address = $request->address;
        self::$about->zipCode = $request->zipCode;
        self::$about->email = $request->email;
        self::$about->mobile = $request->mobile;
        self::$about->image = self::$imageUrl;
        self::$about->completed = $request->completed;
        self::$about->resume = self::$resumeUrl;
        self::$about->status = $request->status;
        self::$about->save();
    }
    public static function updateAbout($request, $id)
    {
        self::$about = About::find($id);

        self::$image = $request->file('image');
        if (self::$image)
        {
            if (file_exists(self::$about->image))
            {
                unlink(self::$about->image);
            }
            self::$imageName = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
            self::$imagePath = 'admin-assets/image/';
            self::$image->move(self::$imagePath,self::$imageName);
            self::$imageUrl = self::$imagePath.self::$imageName;
        }
        else
        {
            self::$imageUrl = self::$about->image;
        }

        self::$resume = $request->file('resume');
        if (self::$resume)
        {
            if (file_exists(self::$about->resume))
            {
                unlink(self::$about->resume);
            }
            self::$resumeName = time().rand(10, 1000).'.'.self::$resume->getClientOriginalExtension();
            self::$resumePath = 'admin-assets/file/';
            self::$resume->move(self::$resumePath,self::$resumeName);
            self::$resumeUrl = self::$resumePath.self::$resumeName;
        }
        else
        {
            self::$resumeUrl = self::$about->resume;
        }

        self::$about->name = $request->name;
        self::$about->birthDate = $request->birthDate;
        self::$about->address = $request->address;
        self::$about->zipCode = $request->zipCode;
        self::$about->email = $request->email;
        self::$about->mobile = $request->mobile;
        self::$about->image = self::$imageUrl;
        self::$about->completed = $request->completed;
        self::$about->resume = self::$resumeUrl;
        self::$about->status = $request->status;
        self::$about->save();
    }
}
