<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomConnector extends Model
{
    use HasFactory;

    protected $fillable = [
        'base_url',
        'stream_url',
        'auth_type',
        'auth_credentials',
        'status'
    ];
    protected $casts = [
        'auth_credentials' => 'array',
    ];
}
