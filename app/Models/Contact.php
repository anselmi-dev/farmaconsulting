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
        'timezone',
        'interested',
        'message',
        'appointment_date',
        'office'
    ];

    public function getLabelProvinceAttribute ()
    {
        if ($this->province && $p = Province::where('code', $this->province)->first()) {
            return $p->name;
        }
        return $this->province;
    }

    public function getLabelTimezoneAttribute ()
    {
        try {
            $timezones = [0 => '08:30 - 11:00', 1 => '11:00 - 14:00', 2 => '14:00 - 16:00', 3 => '16:00 - 19:00'];
            return $timezones[$this->timezone];
        } catch (\Throwable $th) {
            return $this->timezone;
        }
    }
}
