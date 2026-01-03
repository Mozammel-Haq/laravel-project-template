<?php

namespace App\Models;

use App\Models\Base\BaseTenantModel;
use Illuminate\Database\Eloquent\Model;

class Patient extends BaseTenantModel
{
    public function clinic() { return $this->belongsTo(Clinic::class); }
    public function appointments() { return $this->hasMany(Appointment::class); }
    public function allergies() { return $this->hasMany(PatientAllergy::class); }
    public function medicalHistory() { return $this->hasMany(PatientMedicalHistory::class); }
}
