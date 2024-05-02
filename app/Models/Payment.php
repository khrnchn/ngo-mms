<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'subscription_type',
        'subscription_name',
        'subscription_start_date',
        'subscription_end_date',
    ];
}
