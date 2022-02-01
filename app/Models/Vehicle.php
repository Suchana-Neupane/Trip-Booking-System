<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable=[
    'vehicleno',
    'vehicletypes',
    'availability',
    'capacity',
    'guides_id'
    ];
}
