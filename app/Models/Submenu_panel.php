<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class submenu_panel extends Model
{
    use HasFactory;
    public $fillable=['title' ,'slug' ,'keycheck' ,'namayesh' ,'status' ,'description','menu_id','user_id' ];

}
