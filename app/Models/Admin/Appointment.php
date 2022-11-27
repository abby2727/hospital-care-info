<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $dates = ['appointment_date'];

    protected $fillable = [
        'name',
        'sex',
        'age',
        'address',
        'contact_number',
        'appointment_date',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
