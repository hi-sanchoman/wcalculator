<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Increment
 * @package App\Models
 * @version December 25, 2021, 10:36 pm UTC
 *
 * @property integer $product_id
 * @property string $name
 * @property number $width
 * @property integer $price
 */
class Increment extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'increments';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'category_id',
        'product_id',
        'material_id',
        'name',
        'width',
        'price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'product_id' => 'integer',
        'name' => 'string',
        'width' => 'float',
        'price' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_id' => 'required',
        'material_id' => 'required',
        'name' => 'required',
        'width' => 'required',
        'price' => 'required'
    ];

    
    public function material() {
        return $this->belongsTo(Material::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
