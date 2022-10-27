<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Assets extends Model
{
    use SoftDeletes, HasFactory;
    public $table = 'assets';
    protected $fillable = [
        'name',
        'details',
        'serial',
        'category_id',
        'status_id',
        'quantity'
        // 'build_id',
        // 'dept_id'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
