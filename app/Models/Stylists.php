<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stylists extends Model
{
    use HasFactory;
    protected $table ='stylists';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
    ];
}
