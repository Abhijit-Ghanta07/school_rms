<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_fee_recode extends Model
{
    use HasFactory;
    protected $table ="student_fee_recodes";
    protected $primaryKey="id";
}
