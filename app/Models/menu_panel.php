<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu_panel extends Model
{
    use HasFactory;
    public $fillable=['title','slug','submenu','keycheck','namayesh','keyword','status','description','user_id'];

}
