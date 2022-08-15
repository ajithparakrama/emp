<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'role',
        'phone',
        'address',
        'username',
        'password',
        'active'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function swapping($user) {
        $new_sessid   = \Session::getId(); //get new session_id after user sign in
        $last_session = \Session::getHandler()->read($user->last_sessid); // retrive last session
    
        if ($last_session) {
            if (\Session::getHandler()->destroy($user->last_sessid)) {
                // session was destroyed
            }
        }
    
        $user->last_sessid = $new_sessid;
        $user->save();
    }


}
