<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Material
 * @package App\Models
 * @version December 25, 2021, 9:28 pm UTC
 *
 * @property integer $category_id
 * @property string $name
 * @property string $slug
 * @property string $from_what
 */
class Material extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'materials';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'category_id',
        'name',
        'slug',
        'from_what'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'category_id' => 'integer',
        'name' => 'string',
        'slug' => 'string',
        'from_what' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'category_id' => 'required',
        'name' => 'required',
        'slug' => 'required',
        'from_what' => 'required'
    ];

    public static $editRules = [
        'category_id' => 'required',
        'name' => 'required',
        'slug' => 'required',
        'from_what' => 'required'
    ];


    public static function dropdown() {
        $materials = [];

        foreach (self::get() as $material) {
            $materials[$material->id] = $material->name;
        }

        return $materials;
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
