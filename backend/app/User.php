<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;
use Laravel\Passport\HasApiTokens;
class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function findForPassport($username) {
        return $this->where('user_email', $username)->first();
    }

    public function getAuthPassword()
    {
        return $this->userpassword;
    }

    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y H:i:s');
    }

    public function getUpdatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y H:i:s');
    }
}
