<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    protected $table = 'records';
    protected $fillable = [
        'stylist',
        'service',
        'name',
        'phone',
        'date',
        'time',
        'message',
    ];
}
