<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Variant;

class Product extends Model
{
    protected $fillable = ['name'];

    public function variants()
    {
        return $this->hasMany(Variant::class);
    }
}