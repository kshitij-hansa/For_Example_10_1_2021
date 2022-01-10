<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    protected $fillable = ['title','discription'];
    public function users(){
        return $this->belongsToMany(User::class,'roler_User','user_id','role_id');
    }
}
