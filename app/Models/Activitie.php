<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activitie extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'price',
        'course_id',
        'start_date'
    ];

    protected $hidden = [
        'deleted_at',
    ];

    public function course()
    {
        return $this->belongsToMany(Course::class);
    }


}
