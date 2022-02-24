<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ProductAdvantage
 * @package App\Models
 * @version February 24, 2022, 10:15 am UTC
 *
 * @property integer $product_id
 * @property string $name
 */
class ProductAdvantage extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'product_advantages';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'product_id',
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'product_id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_id' => 'required',
        'name' => 'required'
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
