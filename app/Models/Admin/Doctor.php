<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'age',
        'sex',
        'contact_number',
        'email',
        'specialties',
    ];

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
}
