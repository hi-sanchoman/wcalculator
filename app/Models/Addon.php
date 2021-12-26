<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Addon
 * @package App\Models
 * @version December 25, 2021, 9:49 pm UTC
 *
 * @property integer $category_id
 * @property string $slug
 * @property string $name
 * @property integer $price
 * @property string $type
 */
class Addon extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'addons';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'category_id',
        'slug',
        'name',
        'price',
        'type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'category_id' => 'integer',
        'slug' => 'string',
        'name' => 'string',
        'price' => 'integer',
        'type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'category_id' => 'required',
        'slug' => 'required|unique:addons,slug',
        'name' => 'required',
        'price' => 'required',
        'type' => 'required'
    ];

    public static $editRules = [
        'category_id' => 'required',
        'slug' => 'required',
        'name' => 'required',
        'price' => 'required',
        'type' => 'required'
    ];

    

    public static function typeDropdown() {
        return [
            'click' => 'Клик',
            'input' => 'С полем ввода'
        ];
    } 
}
