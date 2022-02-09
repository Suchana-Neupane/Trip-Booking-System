<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'details','price','availability','duration','guides_id','vehicles_id'
    ];


public function guides()
    {
        return $this->belongsTo(Guide::class, 'guides_id');
    }

 public function vehicles()
    {
        return $this->belongsTo(Vehicle::class, 'vehicles_id');
    }
}