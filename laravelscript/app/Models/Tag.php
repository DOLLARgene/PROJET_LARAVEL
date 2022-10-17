<?php

namespace App\Models;
use App\Models\Event;
use Database\Factories\TagFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $garded = [];
    use HasFactory;
        
        public function events()
    {
        return $this->belongsToMany(Event::class);
    }
}

