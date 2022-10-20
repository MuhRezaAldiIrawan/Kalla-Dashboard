<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;


class customers extends Model
{
    public function scopeFilter($query, array $filters)
    {
        if(isset($filters['search']) ? $filters['search'] : false){
            return $query->where('nama', 'like', '%' . $filters['search'] . '%');
        }
    }


    public function alldata()
    {
        return DB::table('customers')->get();
    
        
    }

    public function onedata()
    {
        return DB::table('customers')->count();
    
        
    }
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'gender',
        'alamat',
        'subdistrict',
        'district',
        'city',
        'provinsi',
        'hp',
        'ktp',
        'salesman',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
