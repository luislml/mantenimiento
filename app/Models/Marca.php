<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Marca
 * @package App\Models
 * @version August 19, 2019, 7:55 pm UTC
 *
 * @property string marca
 */
class Marca extends Model
{
    use SoftDeletes;

    public $table = 'marcas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'marca'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'marca' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
