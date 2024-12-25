<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    use HasFactory;

    public static $data;

    public static function save_project_type($request)
    {
        self::$data = new ProjectType();
        self::$data->title = $request->title??null;
        self::$data->save();
    }
}
