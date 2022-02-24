<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Product
 * @package App\Models
 * @version December 25, 2021, 8:36 pm UTC
 *
 * @property integer $category_id
 * @property string $slug
 * @property string $name
 * @property integer $price
 * @property string $type
 * @property integer $width
 * @property integer $size
 * @property integer $price_el
 * @property integer $price_kedr
 * @property string $img_1
 * @property string $img_2
 */
class Product extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'products';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'category_id',
        'slug',
        'name',
        'price',
        'type',
        'width',
        'size',
        'price_el',
        'price_kedr',
        'img_1',
        'img_2',
        'description',
        'column1',
        'column2',
        'column3',
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
        'type' => 'string',
        // 'width' => 'integer',
        // 'size' => 'integer',
        'price_el' => 'integer',
        'price_kedr' => 'integer',
        'img_1' => 'string',
        'img_2' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'category_id' => 'required',
        'slug' => 'required|unique:products,slug',
        'name' => 'required',
        'price' => 'required',
        'type' => 'required',
        'width' => 'required',
        'size' => 'required',
        'price_el' => 'required',
        'price_kedr' => 'required',
        // 'img_1' => 'required',
        // 'img_2' => 'required'
    ];

    
    public static $editRules = [
        'category_id' => 'required',
        'slug' => 'required',
        'name' => 'required',
        'price' => 'required',
        'type' => 'required',
        'width' => 'required',
        'size' => 'required',
        'price_el' => 'required',
        'price_kedr' => 'required',
        // 'img_1' => 'required',
        // 'img_2' => 'required'
    ];


    public static function dropdown() {
        $products = [];

        foreach (self::get() as $product) {
            $products[$product->id] = $product->name;
        }

        return $products;
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function advantages() {
        return $this->hasMany(ProductAdvantage::class);
    }

    public function inners() {
        return $this->hasMany(Inner::class);
    }

    public function attributes() {
        return $this->hasMany(Attribute::class);
    }





    public static function discount($product) {
        $total = 0;

        foreach ($product->inners as $inner) {
            $total += $inner->price;
        }

        return $total;
    }
}
