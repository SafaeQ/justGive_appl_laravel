<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donate extends Model
{
    use HasFactory;
    protected $table = 'donate';
    protected $fillable = [
        'amount',
        'users_id',
        'projects_id',
    ];
}
