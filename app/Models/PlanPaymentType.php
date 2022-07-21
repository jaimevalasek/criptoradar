<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanPaymentType extends Model
{
    protected $fillable = ['name', 'description', 'code', 'memo'];
}
