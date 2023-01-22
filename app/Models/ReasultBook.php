<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReasultBook extends Model
{
    use HasFactory;
    public $fillable=['user_id' ,'course_id' ,'count_episode' ,'time_episode' ,'score' ,'reasult' ];
}
