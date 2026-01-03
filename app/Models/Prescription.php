<?php

namespace App\Models;

use App\Models\Base\BaseTenantModel;

class Prescription extends BaseTenantModel
{
    public function items() { return $this->hasMany(PrescriptionItem::class); }
}
