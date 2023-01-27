<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menupanel extends Model
{
    use HasFactory;
    public $fillable=['title','slug','submenu','keycheck','namayesh','keyword','status','description','user_id'];

}
