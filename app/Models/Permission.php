<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    use HasFactory;

    public $fillable=['title','slug','user_id'];

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

}
