<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Whitecube\NovaFlexibleContent\Value\FlexibleCast;

class Landing extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'qr',
        'breadcrumb',
        'content',
        'redirect',
        'redirect_url',
        'active'
    ];

    protected $casts = [
        'content' => FlexibleCast::class
    ];
}
