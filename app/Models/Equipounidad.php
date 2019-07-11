<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Equipounidad
 * @package App\Models
 * @version July 11, 2019, 2:49 pm UTC
 *
 * @property string nombre
 * @property string unidad
 * @property string area
 * @property string subarea
 */
class Equipounidad extends Model
{
    use SoftDeletes;

    public $table = 'e_informaticos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id',
        'unidad_id',
        'area_id',
        'sub_area_id',
        'estado'
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
        
    ];



    
}
