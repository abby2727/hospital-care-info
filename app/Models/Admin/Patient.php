<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'name',
        'first_name',
        'middle_name',
        'last_name',
        'sex',
        'age',
        'address',
        'contact_number',
        'email',
        'prescription',
        'diagnosis',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }
}
