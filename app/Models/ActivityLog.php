<?php

namespace App\Models;

use App\Models\Base\BaseTenantModel;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends BaseTenantModel
{
     public function user() { return $this->belongsTo(User::class); }
}
