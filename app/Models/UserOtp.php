<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOtp extends Model
{
    use HasFactory;


    protected $fillable = [

        'code'
    ];


    public function hasExpired(){
        return $this->created_at->diffInMinutes(now()) > 5;

    }


    public static function generateCode()
    {

        return random_int(100000,999999);
    }
}
