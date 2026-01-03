<?php

namespace App\Models;

use App\Models\Base\BaseTenantModel;
class Visit extends BaseTenantModel
{
     public function appointment() { return $this->belongsTo(Appointment::class); }
    public function consultation() { return $this->hasOne(Consultation::class); }
}
