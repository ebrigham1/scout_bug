<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use Searchable;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
            'user_id' => $this->user_id,
            'country' => $this->user->country->name ?? null
        ];
    }
}
