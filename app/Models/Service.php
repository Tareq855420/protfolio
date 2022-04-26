<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected static $service;

    public static function createService($request)
    {
        self::$service = new Service();
        self::$service->icon = $request->icon;
        self::$service->name = $request->name;
        self::$service->description = $request->description;
        self::$service->status = $request->status;
        self::$service->save();
    }
    public static function updateService($request, $id)
    {
        self::$service = Service::find($id);
        self::$service->icon = $request->icon;
        self::$service->name = $request->name;
        self::$service->description = $request->description;
        self::$service->status = $request->status;
        self::$service->save();
    }
}
