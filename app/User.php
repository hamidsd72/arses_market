<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'uid', 'selfe', 'phone',
        'firstName', 'password', 'mobile', 'postCode',
        'address', 'avatar', 'cardImage', 'nationalCode', 'lastName'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function wallets(){
        return $this->hasMany(Wallet::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

}
