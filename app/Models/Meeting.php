<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $fillable = [
        'name',
        'place',
        'start_date',
        'start_time',
        '_token', // Add _token to the $fillable array
    ];
}
