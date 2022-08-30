<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table="film";
    protected $primaryKey="film_id";
    public $timestamps =false;
    use HasFactory;


    public function inventory(){
        return $this->hasMany(Inventory::class,
                              "film_id");     
    }
    public function category(){
        return $this->belongsToMany(Category::class,
                                   'film_category',
                                    'category_id',
                                    'film_id');
    }
    public function actor(){
        return $this->belongToMany(Actor::class,
                                   'film_actor',
                                    'actor_id',
                                    'film_id');
    }

}
