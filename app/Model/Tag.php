<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];

    public function audios()
    {
        return $this->morphedByMany(Audio::class,'taggable','taggables');
    }

}
