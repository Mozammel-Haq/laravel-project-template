<?php

namespace App\Models;

use App\Models\Base\BaseTenantModel;

class Appointment extends BaseTenantModel
{
    public function patient() { return $this->belongsTo(Patient::class); }
    public function doctor() { return $this->belongsTo(Doctor::class); }
    public function visit() { return $this->hasOne(Visit::class); }
    public function statusLogs() { return $this->hasMany(AppointmentStatusLog::class); }
}
