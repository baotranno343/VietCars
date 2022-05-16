<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersModel extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['user_id', 'car_id', 'email', 'name', 'address',  'phone', 'note', 'employee'];
}
