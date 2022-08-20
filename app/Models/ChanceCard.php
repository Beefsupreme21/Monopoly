<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChanceCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'image',
        'amount',
        'canHold',
        'goToProperty',
    ];
}
