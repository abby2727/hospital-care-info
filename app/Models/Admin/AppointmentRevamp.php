<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentRevamp extends Model
{
    use HasFactory;

    protected $dates = ['appointment_date'];

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
        'appointment_date',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function patientRecord()
    {
        return $this->hasMany(PatientRevamp::class, 'appointment_patient_id');
    }
}
