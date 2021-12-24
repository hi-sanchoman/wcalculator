<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Manager
 * @package App\Models
 * @version December 24, 2021, 2:19 pm UTC
 *
 * @property string $fullname
 * @property string $photo
 * @property string $specialty
 * @property string $phone
 * @property string $email
 */
class Manager extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'managers';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'fullname',
        'photo',
        'specialty',
        'phone',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fullname' => 'string',
        'photo' => 'string',
        'specialty' => 'string',
        'phone' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fullname' => 'required',
        'photo' => 'required',
        'specialty' => 'required',
        'phone' => 'required',
        'email' => 'required'
    ];

    
}
