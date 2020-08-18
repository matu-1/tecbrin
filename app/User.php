<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    public $timestamps = false; //si se borra esto del migrate se tiene q poner false para evitar error en el modelo
    protected $table = 'usuario';
    protected $fillable = [
        'nombre', 'apellido', 'telefono', 'email', 'password', 'tipo', 'estado',
    ];

    protected $attributes = [
      'estado' => 1,
    ];

    public function setPasswordAttribute($password){
      $this->attributes["password"] = bcrypt($password);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
