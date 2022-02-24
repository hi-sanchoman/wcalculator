<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Inner
 * @package App\Models
 * @version February 24, 2022, 10:50 am UTC
 *
 * @property integer $product_id
 * @property string $name
 * @property integer $price
 * @property string $status
 */
class Inner extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'inners';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'product_id',
        'name',
        'price',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'product_id' => 'integer',
        'name' => 'string',
        'price' => 'integer',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_id' => 'required',
        'name' => 'required',
        'price' => 'required',
        'status' => 'required'
    ];

    
    public static function statusesDropdown() {
        return [
            'show' => 'Показать цену',
            'offer' => 'Акция (зачеркнуть цену)',
            'included' => 'Стандартный комплект',
        ];
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
