<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'address',
        'primarycontact',
        'secondarycontact',
        'guides_id',
        'vehicles_id',
        'packages_id'
    ];
}
