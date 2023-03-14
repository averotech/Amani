<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    use SortableTrait;

    public $sortable = [
      'order_column_name' => 'sort_order',
      'sort_when_creating' => true,
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name_ar',
        'name_en',
        'name_hr',
        'description_ar',
        'description_en',
        'description_hr',
        'category_icon',
        'sort_order',
        'is_published',


    ];



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

    ];
    protected $with = ['Items'];

    public static function boot()
    {
      parent::boot();

      static::creating(function ($Category) {

      });
    }


    public function Items()
    {
        return $this->hasMany(Item::class);
    }
}
