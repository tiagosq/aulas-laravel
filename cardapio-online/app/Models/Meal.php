<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable = [
        'menu_id',
        'name',
        'description',
        'price'
    ];

    protected $hidden = [
        'updated_at'
    ];

    function casts() {
        return [
            'created_at' => 'datetime'
        ];
    }
}
