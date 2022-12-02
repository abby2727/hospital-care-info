<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientRevamp extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointment_patient_id',
        'diagnosis',
        'prescription',
    ];

    public function appointment_patient()
    {
        return $this->belongsTo(AppointmentRevamp::class);
    }
}
