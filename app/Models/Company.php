<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'contact_person',
        'email',
        'phone',
        'location',
        'status'
    ];
}
