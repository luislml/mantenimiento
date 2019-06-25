<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Usuario
 * @package App\Models
 * @version June 12, 2019, 1:23 pm UTC
 *
 * @property string nombre
 * @property string apellido
 * @property string ci
 * @property string telefono
 * @property string rol
 */
class Usuario extends Model
{
    use SoftDeletes;

    public $table = 'users';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'apellido',
        'ci',
        'telefono',
        'rol'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'apellido' => 'string',
        'ci' => 'string',
        'telefono' => 'string',
        'rol' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'ci' => 'required'
    ];
    

    
}
