<?php


namespace SonSlim\Authentication\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password'
    ];

    protected function setPasswordAttribute($value) {
        // TODO adicionar regra para geração de hash de senha
    }
}