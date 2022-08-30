<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table="city";
    protected $primaryKey="city_id";
    public $timestamps =false;

    public function film(){
        return $this->belongsTo(Country::class,
                              "country_id");     
    }
    use HasFactory;
}
