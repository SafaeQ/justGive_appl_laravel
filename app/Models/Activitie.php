<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
class Activitie extends Model
{
    use HasFactory;
    protected $table = 'Activities';
    protected $fillable = [
        'name',
        'date',
        'description',
        'image',
        'projects_id',
        'status',
    ];
    public function project(){
        return $this->belongsTo(project::class,'projects_id');
    }
}