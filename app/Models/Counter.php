<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use HasFactory;

    protected static $counter;

    public static function createCounter($request)
    {
        self::$counter = new Counter();
        self::$counter->experience = $request->experience;
        self::$counter->project = $request->project;
        self::$counter->costumer = $request->costumer;
        self::$counter->coffee = $request->coffee;
        self::$counter->status = $request->status;
        self::$counter->save();
    }
    public static function updateCounter($request, $id)
    {
        self::$counter = Counter::find($id);
        self::$counter->experience = $request->experience;
        self::$counter->project = $request->project;
        self::$counter->costumer = $request->costumer;
        self::$counter->coffee = $request->coffee;
        self::$counter->status = $request->status;
        self::$counter->save();
    }
}
