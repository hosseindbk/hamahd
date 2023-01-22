<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark_user extends Model
{
    use HasFactory;
    public $fillable=['user_id','course_id'];

}
