<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['email', 'password', 'name', 'address', 'phone'];
}
