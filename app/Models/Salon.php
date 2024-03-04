<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Salons_managers;
use App\Models\Manager;

class Salon extends Model
{
    use HasFactory;

    protected $table = 'salons';
    protected $fillable = [
        'name',
        'description',
        'contact_phone',
        'contact_email',
    ];
    
    public function salonManager()
    {
        return $this->belongsToMany(Manager::class, 'salons_managers', 'salon_id', 'manager_id');
    }
}
