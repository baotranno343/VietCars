<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartsModel extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['order_id', 'car_id', 'amount'];
}
