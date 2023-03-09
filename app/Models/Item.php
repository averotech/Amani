<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory, SoftDeletes;
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
        'category_id',
        'is_new',
        'wieght',
        'price',
        'image',
        'spicy',
        'free_gluten',
        'vegetarian',
        'potato',
        'sort_order',
        'is_published',


    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [];


    protected static function booted()
    {

        parent::booted();

        static::creating(function ($Item) {
        });
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
}
