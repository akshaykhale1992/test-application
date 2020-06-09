<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // Basic Details
        'name', 'email', 'mobile', 'birthday', 'gender', 'state_id', 'city_id',

        // Qualification Details
        'education', 'year_of_completion', 'profile_picture', 'skill', 'certificate_file',

        // Profession Details
        'profession',

        // Salaries Person Details
        'company_name', 'joining_date',

        // Self-Employed Person Details
        'business_name', 'location',
    ];

    protected $hidden = [
        'deleted_at', 'updated_at', 'created_at', 'state_id', 'city_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        // Date Casts
        'email_verified_at' => 'datetime',
        'birthday'          => 'date',
        'joining_date'      => 'date',
    ];

    protected $appends = ['state', 'city'];

    public function getStateAttribute()
    {
        return State::find($this->state_id)->state_name;
    }

    public function getCityAttribute()
    {
        return City::find($this->city_id)->city_name;
    }
}
