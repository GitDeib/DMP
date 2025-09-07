<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class IntermentStaff extends Authenticatable
{
    use HasFactory;

    protected $table = 'interment_staff'; // Add this line if your table is singular

    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'email',
        'phonenumber',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
