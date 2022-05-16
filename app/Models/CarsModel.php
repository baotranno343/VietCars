<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsModel extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['name', 'content', 'brand_id', 'price', 'km', 'year', 'type', 'seats'];
    // public static function layso()
    // {
    //     $cars = new CarsModel();
    //     return $cars->get();
    // }


}
