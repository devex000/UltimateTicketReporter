<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'problem_since',
        'description',
        'priority_id',
        'category_id',
        'subcategory_id',
        'topic_id',
        'status_id'
    ];

    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
    public function status() {
        return $this->belongsTo(Status::class);
    }
}
