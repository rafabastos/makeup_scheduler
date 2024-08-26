<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    
    protected  $primaryKey = 'appointment_id';

    protected $fillable = ['created_at', 'scheduled_to', 'clients_name', 'clients_phone', 'confirmed'];

    protected $casts = [
        'created_at' => 'datetime',
        'scheduled_to' => 'datetime',
        'confirmed' => 'datetime',
    ];

    public function services()
    {
        return $this->hasMany(Services::class, 'service_id');
    }
}
