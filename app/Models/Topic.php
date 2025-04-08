<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
        "name",
        "description",
        "subcategory_id"
    ];

    public function category()
    {
        return $this->belongsTo(Subcategory::class);
    }
}
