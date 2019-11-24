<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Debug extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
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

    /***
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function programmes() {
        return $this->belongsToMany(Programme::class);
    }

    /***
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function schedules() {
        // someone wondering why this one resulting this kind of query "`schedules`.`course_id` is not null"
        // read this https://laracasts.com/discuss/channels/eloquent/why-laravel-add-an-extra-where-condition-foreign-key-is-not-null-to-hasonemany-relation
        return $this->hasMany(Schedule::class);
    }
}
