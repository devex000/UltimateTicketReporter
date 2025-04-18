<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ["name", "description"];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
}
