<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Project extends Model
{
    use HasFactory;

     protected $table = 'projects';

     protected $fillable = [
        'name',
        'category_id',
        'association_id',
        'description',
        'image',
        "budget",
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }



}
