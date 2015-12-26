<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];

    protected $dates = ['published_at'];

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function setPublishedAttribute($date)
    {
        $this->attribute['published_at'] = Carbon::parse($date);
    }
}
