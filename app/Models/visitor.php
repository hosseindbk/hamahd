<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visitor extends Model
{
    use HasFactory;
    public $fillable=['ip' ,'page_id' ,'device' ,'browser' ,'from_page' ,'to_page' ,'date' ];

}
