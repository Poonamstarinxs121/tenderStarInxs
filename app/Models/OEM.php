<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OEM extends Model
{
    protected $fillable = [
        'company_name',
        'contact_person',
        'phone_number',
        'email',
        'status'
    ];
} 