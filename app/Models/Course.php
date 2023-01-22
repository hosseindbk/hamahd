<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public $fillable=['title','slug','user_id','category_id','rate_id','course_time','file_link','course_price','course_type','status','description'];
}
