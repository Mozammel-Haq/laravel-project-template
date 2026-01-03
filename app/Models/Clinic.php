<?php

namespace App\Models;

use App\Models\Base\BaseTenantModel;

class Clinic extends BaseTenantModel
{
    public function departments() { return $this->hasMany(Department::class); }
    public function users() { return $this->hasMany(User::class); }
    public function patients() { return $this->hasMany(Patient::class); }
    public function appointments() { return $this->hasMany(Appointment::class); }
    public function wards() { return $this->hasMany(Ward::class); }
}
