<?php

namespace App\Models;

use App\Models\Base\BaseTenantModel;
class Doctor extends BaseTenantModel
{
    public function user() { return $this->belongsTo(User::class); }
    public function department() { return $this->belongsTo(Department::class, 'primary_department_id'); }
    public function schedules() { return $this->hasMany(DoctorSchedule::class); }
    public function clinics() { return $this->belongsToMany(Clinic::class, 'doctor_clinic'); }
}
