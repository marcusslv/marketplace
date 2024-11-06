<?php

namespace App\Models;

use App\Marketplace\Traits\HasTenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductEvaluation extends Model
{
    /** @use HasFactory<\Database\Factories\ProductEvaluationFactory> */
    use HasFactory, HasTenant;
}
