<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class UserRank extends Model
{
    use HasFactory;

    protected $fillable = [

        'rank','streak'
    ];

    public function hasRanked(){
      //
    }

}
