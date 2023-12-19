<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;


    protected $guarded = array('id');

    public function scopeActive()
    {

        return $this->where('status', 'active');
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('purchase_date', 'notes', 'city_id', 'file_path', 'image' , 'carton_image' ,'invoice_image');
    }
}
