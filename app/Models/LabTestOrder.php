<?php

namespace App\Models;

use App\Models\Base\BaseTenantModel;

class LabTestOrder extends BaseTenantModel
{
    public function results() { return $this->hasMany(LabTestResult::class); }
}
