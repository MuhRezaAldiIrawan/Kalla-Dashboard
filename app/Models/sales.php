<?php

namespace App\Models;

// use Illuminate\Support\Str;
use Dotenv\Util\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class sales extends Authenticatable
{

    use HasFactory, Notifiable;


    // public function user()
    // {
    //    return $this->belongsTo(User::class);
    // }

    public function getalldata()
    {
        return DB::table('sales')->get();
    
        
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $fillable = [
        'nama',
        'email',
        'hp',
        'password',
        'image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        // 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function getRememberToken()
    // {
    // return null; // not supported
    // }

    // public function setRememberToken($value)
    // {
    // // not supported
    // }

    // public function getRememberTokenName()
    // {
    //     return null; // not supported
    
    // }

    /**
     * Overrides the method to ignore the remember token.
    */
}