<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public function role(){
        return $this->belongsTo(User::class, 'role','id');
        }
}