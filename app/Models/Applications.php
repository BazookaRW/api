<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applications extends Model
{
    use HasFactory;

    protected $hidden=[
        'id',
        'store_id',
        'created_at',
        'updated_at'
    ];




}
