<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected static $skill;

    public static function createSkill($request)
    {
        self::$skill = new Skill();
        self::$skill->title = $request->title;
        self::$skill->range = $request->range;
        self::$skill->lastWork = $request->lastWork;
        self::$skill->lastMonth = $request->lastMonth;
        self::$skill->status = $request->status;
        self::$skill->save();
    }
    public static function updateSkill($request, $id)
    {
        self::$skill = Skill::find($id);
        self::$skill->title = $request->title;
        self::$skill->range = $request->range;
        self::$skill->lastWork = $request->lastWork;
        self::$skill->lastMonth = $request->lastMonth;
        self::$skill->status = $request->status;
        self::$skill->save();
    }
}
