<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //* Casos personalizados de nomenclatura
    // protected $table = 'salame';

    //* Quais valores o usuário pode preencher
    protected $fillable = [
        'title',
        'description'
    ];

    //* Quais dados eu quero ter acesso, mas não quero que o usuário tenha acesso
    protected $hidden = [
        'updated_at',
    ];

    //* Quais valores eu preciso parsear/converter para tipos específicos
    protected function casts() {
        return [
            'created_at' => 'datetime',
        ];
    }
}
