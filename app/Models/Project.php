<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $casts = [
        'tags' => 'array',
    ];

    public function type() {
        return $this->belongsTo(Type::class);
    }
}
