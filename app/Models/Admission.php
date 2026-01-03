<?php

namespace App\Models;

use App\Models\Base\BaseTenantModel;
class Admission extends BaseTenantModel
{
     public function patient() { return $this->belongsTo(Patient::class); }
    public function bedAssignments() { return $this->hasMany(BedAssignment::class); }
    public function services() { return $this->hasMany(InpatientService::class); }
}
