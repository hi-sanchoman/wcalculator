<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Attribute
 * @package App\Models
 * @version February 24, 2022, 11:10 am UTC
 *
 * @property integer $product_id
 * @property string $name
 * @property string $others
 * @property string $ourselves
 */
class Attribute extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'attributes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'product_id',
        'name',
        'others',
        'ourselves'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'product_id' => 'integer',
        'name' => 'string',
        'others' => 'string',
        'ourselves' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_id' => 'required',
        'name' => 'required',
        'others' => 'required',
        'ourselves' => 'required'
    ];

    

    public function product() {
        return $this->belongsTo(Product::class);
    }


    public static function dropdown() {
        return [
            'included' => 'Включено',
            'paid' => 'Платная опция, Р',
        ];
    }
}
