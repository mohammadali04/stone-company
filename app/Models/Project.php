<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable=['title','description','img','date','location'];
    public function slides(){
        return $this->hasMany(ProjectSlides::class,'project_id','id');
    }
}
