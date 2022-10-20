<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class events extends Model
{
    use HasFactory;

    public function alldata()
    {
        return DB::table('events')->get();  
        
    }

    
    // public function delete()
    // {
    //     return DB::table('events')->delete();  
        
    // }

    protected $fillable = [
        'title',
        'organizer',
        'start',
        'end',
        'tempat',
        'image',
    ];
}
