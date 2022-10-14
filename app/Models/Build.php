<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Build extends Model
{
    use HasFactory;
    protected $fillable = [
        'build_name',
        'serial',
        'details',
        'status_id',
        'dept_id',
        'updated_at'
    ];
}
