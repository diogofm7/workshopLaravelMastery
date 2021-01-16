<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Description;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'body', 'event_at'
    ];

    protected $dates = ['event_at'];
}
