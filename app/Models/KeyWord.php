<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeyWord extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function template(){
        return $this->belongsTo(Template::class,'template_id');
    }
}
