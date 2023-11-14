<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable =
     [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'is_admin'
    

    ];
    use HasFactory;
}
