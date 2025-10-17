<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Learn extends Model
{
    //
    use HasFactory;

    protected $table = 'data_test';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

}
