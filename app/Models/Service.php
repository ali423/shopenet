<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function template()
    {
        return $this->belongsTo(Template::class,'template_id');
    }
    public function factor(){
        return $this->hasOne(Factor::class);
    }

}
