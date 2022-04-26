<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected static $education;

    public static function createEdu($request)
    {
        self::$education = new Education();
        self::$education->dur = $request->dur;
        self::$education->lavel = $request->lavel;
        self::$education->institute = $request->institute;
        self::$education->description = $request->description;
        self::$education->status = $request->status;
        self::$education->save();
    }
    public static function updateEdu($request, $id)
    {
        self::$education = Education::find($id);
        self::$education->dur = $request->dur;
        self::$education->lavel = $request->lavel;
        self::$education->institute = $request->institute;
        self::$education->description = $request->description;
        self::$education->status = $request->status;
        self::$education->save();
    }
}
