<?php

namespace App\Models;

use App\Models\Base\BaseTenantModel;

class Consultation extends BaseTenantModel
{
     public function visit() { return $this->belongsTo(Visit::class); }
    public function prescription() { return $this->hasOne(Prescription::class); }
}
