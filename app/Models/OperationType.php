<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OperationType extends Model
{
    protected $fillable = ['description'];

    const CREDIT_VOUCHER = 'Credit Voucher';
}
