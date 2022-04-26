<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected static $project;
    protected static $image;
    protected static $imageName;
    protected static $imagePath;
    protected static $imageUrl;

    public static function createProject($request)
    {
        self::$image = $request->file('image');
        self::$imageName = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
        self::$imagePath = 'admin-assets/image/';
        self::$image->move(self::$imagePath,self::$imageName);
        self::$imageUrl = self::$imagePath.self::$imageName;

        self::$project = new Project();
        self::$project->title = $request->title;
        self::$project->subtitle = $request->subtitle;
        self::$project->image = self::$imageUrl;
        self::$project->status = $request->status;
        self::$project->save();
    }
    public static function updateProject($request, $id)
    {
        self::$project = Project::find($id);

        self::$image = $request->file('image');
        if (self::$image)
        {
            if (file_exists(self::$project->image))
            {
                unlink(self::$project->image);
            }
            self::$imageName = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
            self::$imagePath = 'admin-assets/image/';
            self::$image->move(self::$imagePath,self::$imageName);
            self::$imageUrl = self::$imagePath.self::$imageName;
        }
        else
        {
            self::$imageUrl = self::$project->image;
        }
        self::$project->title = $request->title;
        self::$project->subtitle = $request->subtitle;
        self::$project->image = self::$imageUrl;
        self::$project->status = $request->status;
        self::$project->save();
    }
}
