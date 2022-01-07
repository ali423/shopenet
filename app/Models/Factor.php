<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factor extends Model
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
    public function service()
    {
        return $this->belongsTo(Service::class,'service_id');
    }
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

}
