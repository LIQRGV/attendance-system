<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
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
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function schedule() {
        return $this->hasOne(Schedule::class);
    }

    public function subjects()
    {
        return $this->morphTo();
    }
}
