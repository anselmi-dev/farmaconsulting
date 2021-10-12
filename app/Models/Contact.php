<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Province;

class Contact extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'phone',
        'province',
        'interested',
        'message'
    ];

    public function getLabelProvinceAttribute ()
    {
        if ($this->province && $p = Province::where('code', $this->province)->first()) {
            return $p->name;
        }
        return $this->province;
    }
}
