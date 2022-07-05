<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Whitecube\NovaFlexibleContent\Value\FlexibleCast;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Landing extends Model implements Sortable
{
    use HasFactory;
    use SortableTrait;

    public $sortable = [
      'order_column_name'  => 'sort_order',
      'sort_when_creating' => true,
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'qr',
        'title',
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
