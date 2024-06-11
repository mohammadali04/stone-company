<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['title','description','cat_id','img'];
    public function slides(){
       return $this->hasMany(Pslides::class,'product_id','id');
    }
}
