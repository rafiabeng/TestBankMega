<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Node\Block\Document;

class DocumentDetails extends Model
{
    public function document(){
        return $this->belongsTo(Document::class, 'document_no','document_no');
    }
}