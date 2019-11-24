<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_id_number', 'name',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
    /**
     * The attributes that should be casted to native types
     *
     * @var array
     */
    protected $casts = [];
    /**
     * datetime object attributes.
     *
     * @var array
     */
    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at',
        'permanent_deleted_at',
    ];

    public function attendances()
    {
        return $this->morphMany(Attendance::class, 'subjects');
    }
}
