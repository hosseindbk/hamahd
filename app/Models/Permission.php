<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    use HasFactory;
    public function roles(){
        return $this->belongsToMany(Role::class);
    }
    public $fillable=['title','slug','user_id'];

}
