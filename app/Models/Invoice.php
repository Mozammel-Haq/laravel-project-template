<?php

namespace App\Models;

use App\Models\Base\BaseTenantModel;

class Invoice extends BaseTenantModel
{
    public function items() { return $this->hasMany(InvoiceItem::class); }
    public function payments() { return $this->hasMany(Payment::class); }
}
