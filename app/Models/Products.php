<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected  $primaryKey = 'product_id';

    protected $fillable = ['brand', 'presentation', 'description'];

    public function serivce()
    {
        return $this->belongsTo(Services::class, 'service_id');
    }
}
