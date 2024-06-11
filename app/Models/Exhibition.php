<?php

namespace App\Models;

use App\Models\Exslides;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exhibition extends Model
{
    use HasFactory;
    protected $fillable=['title','description','img','date','location'];
    public function slides(){
        $this->hasMany(Exslides::class,'exhibition_id','id');
    }
}
