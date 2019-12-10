<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class personaf
 * @package App\Models
 * @version July 2, 2019, 12:56 am UTC
 *
 * @property string nombre
 * @property string unidad
 * @property string area
 * @property string subarea
 */
class personaf extends Model
{
    use SoftDeletes;

    public $table = 'users';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'apellido',
        'ci',
        'telefono',
        'rol',
        'estado',
        'unidad_id',
        'area_id',
        'sub_area_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'unidad' => 'string',
        'area' => 'string',
        'subarea' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'string|regex:/^[A-Z, ]+$/',
        'apellido' => 'string|regex:/^[A-Z, ]/',
        'ci' => 'string|unique:users|min:6|max:10|regex:/^([0-9]{6,8})+[A-Z]{0,2}/'
    ];

    
}
