<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function templateOptions(){
        return $this->hasMany(TemplateOption::class);
    }
    public function templateDefaultOptions(){
        return $this->hasMany(TemplateOption::class)->where('type','default');
    }
    public function templateProfessionalOptions(){
        return $this->hasMany(TemplateOption::class)->where('type','professional');
    }

    public function KeyWords(){
        return $this->hasMany(KeyWord::class);
    }

}
