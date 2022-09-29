<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AudienceDesigner extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function audience(){
        return $this->belongsTo(Audience::class, "audience_id");
    }

    public function designer(){
        return $this->belongsTo(Designer::class, "designer_id");
    }
}
