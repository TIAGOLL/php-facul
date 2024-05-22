<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description'];
    public function costs()
    {
        return $this->hasMany(Cost::class);
    }
}
