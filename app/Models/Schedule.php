<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
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

    /***
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lectureTime() {
        return $this->belongsTo(LectureTime::class);
    }

    /***
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course() {
        return $this->belongsTo(Course::class);
    }
}
