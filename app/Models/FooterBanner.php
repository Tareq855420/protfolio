<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterBanner extends Model
{
    use HasFactory;

    protected static $footerBanner;
    protected static $image;
    protected static $imageName;
    protected static $imagePath;
    protected static $imageUrl;

    public static function createBanner($request)
    {
        self::$image = $request->file('image');
        self::$imageName = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
        self::$imagePath = 'admin-assets/image/';
        self::$image->move(self::$imagePath,self::$imageName);
        self::$imageUrl = self::$imagePath.self::$imageName;

        self::$footerBanner = new FooterBanner();
        self::$footerBanner->title = $request->title;
        self::$footerBanner->caption = $request->caption;
        self::$footerBanner->subtitle = $request->subtitle;
        self::$footerBanner->short = $request->short;
        self::$footerBanner->image = self::$imageUrl;
        self::$footerBanner->link = $request->link;
        self::$footerBanner->status = $request->status;
        self::$footerBanner->save();
    }
    public static function updateBanner($request, $id)
    {
        self::$footerBanner = FooterBanner::find($id);

        self::$image = $request->file('image');
        if (self::$image)
        {
            if (file_exists(self::$footerBanner->image))
            {
                unlink(self::$footerBanner->image);
            }
            self::$imageName = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
            self::$imagePath = 'admin-assets/image/';
            self::$image->move(self::$imagePath,self::$imageName);
            self::$imageUrl = self::$imagePath.self::$imageName;
        }
        else
        {
            self::$imageUrl = self::$footerBanner->image;
        }

        self::$footerBanner->title = $request->title;
        self::$footerBanner->caption = $request->caption;
        self::$footerBanner->subtitle = $request->subtitle;
        self::$footerBanner->short = $request->short;
        self::$footerBanner->image = self::$imageUrl;
        self::$footerBanner->link = $request->link;
        self::$footerBanner->status = $request->status;
        self::$footerBanner->save();
    }
}
