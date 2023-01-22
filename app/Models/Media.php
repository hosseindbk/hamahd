<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    public $fillable=['title','file_name','file_link','file_type','file_size','file_time','user_id','status'];

}
