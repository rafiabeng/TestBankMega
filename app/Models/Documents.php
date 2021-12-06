<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    public function docdetails(){
        return $this->hasMany(DocumentDetail::class, 'document_no','document_no');
    }
}