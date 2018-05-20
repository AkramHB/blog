<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function incomplete(){
        return Task::where('completed', 0)->get();
    }
   
}
