<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Herramientas
 * @package App\Models
 * @version July 15, 2019, 3:09 pm UTC
 *
 * @property string nombre
 * @property string file
 */
class Herramientas extends Model
{
    use SoftDeletes;

    public $table = 'herramientas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'file'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'file' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'file' => 'required'
    ];

    
}
