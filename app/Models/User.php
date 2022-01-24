<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'name',
        'lastname',
        'lastname2',
        'inversor',
        'fcia',
        'phone',
        'fcia_name',
        'fc_provincias',
        'fc_facturacion',
        'catalogue'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Scope a query to only include popular users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFindEmail($query, $email)
    {
        return $query->where('email', $email);
    }

    public function getFullNameAttribute ()
    {
        return $this->name .' '. $this->lastname;
    }

    public function getFacturacionsAttribute ()
    {
        $facturacions = [];
        foreach (explode("-", $this->fc_facturacion) as $facturacion) {
            if ($facturacion)
                $facturacions[] = $facturacion;
        }
        return $facturacions;
    }

    public function getProvinciasAttribute ()
    {
        $provincias = [];
        foreach (explode("-", $this->fc_provincias) as $provincia) {
            if ($provincia)
                $provincias[] = $provincia;
        }
        return $provincias;
    }
}
