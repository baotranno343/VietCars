<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdviseModel extends Model
{

    use HasFactory;
    protected $table = 'advise';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['user_id', 'car_id', 'email', 'full_name', 'address', 'phone'];
}
