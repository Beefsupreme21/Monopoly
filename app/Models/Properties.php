<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cost',
        'rent',
        'rentColorSet',
        'rentOneHouse',
        'rentTwoHouse',
        'rentThreeHouse',
        'rentFourHouse',
        'rentHotel',
        'mortgage',
        'houseCost',
        'position',
    ];
}
