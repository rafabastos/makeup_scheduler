<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $primaryKey = 'service_id';

    protected $fillable = ['name', 'description'];

    public function products()
    {
        return $this->hasMany(Product::class, 'service_id');
    }

    public function serivce()
    {
        return $this->belongsTo(Appointment::class, 'appointment_id');
    }
}
