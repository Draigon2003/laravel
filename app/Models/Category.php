<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   
    protected $table="category";
    protected $primaryKey="category_id";
    public $timestamps =false;

     

    public function film(){
        return $this->belongsToMany(Film::class,
                                    'film_category',
                                    'category_id',
                                    'film_id');
    }
    use HasFactory;
}
