<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Modelo
 * @package App\Models
 * @version August 19, 2019, 7:18 pm UTC
 *
 * @property string modelo
 */
class Modelo extends Model
{
    use SoftDeletes;

    public $table = 'modelos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'modelo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'modelo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
