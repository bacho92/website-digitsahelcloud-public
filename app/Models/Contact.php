<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'demandeur_type',
        'company',
        'name',
        'email',
        'phone',
        'role',
        'service',
        'message',
        'is_read',
    ];
}
