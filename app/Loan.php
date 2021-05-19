<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = ['amount', 'interest', 'payment_frequency', 'user_id', 'approval_status'];
}

