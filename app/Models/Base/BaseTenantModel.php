<?php

namespace App\Models\Base;

use App\Models\Concerns\BelongsToClinic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

abstract class BaseTenantModel extends Model
{
    use BelongsToClinic;
}
