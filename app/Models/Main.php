<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    use HasFactory;

    protected static $main;

    public static function createMain($request)
    {
        self::$main = new Main();
        self::$main->title = $request->title;
        self::$main->subtitle = $request->subtitle;
        self::$main->status = $request->status;
        self::$main->save();
    }
    public static function updateMain($request, $id)
    {
        self::$main = Main::find($id);
        self::$main->title = $request->title;
        self::$main->subtitle = $request->subtitle;
        self::$main->status = $request->status;
        self::$main->save();
    }
}
