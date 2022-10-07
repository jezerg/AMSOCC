<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'details',
        'serial',
        'category_id',
        'status_id',
        'quantity',
        'build_id',
        'dept_id'
    ];
}
