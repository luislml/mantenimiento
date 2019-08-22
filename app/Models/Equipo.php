<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Equipo
 * @package App\Models
 * @version August 19, 2019, 2:21 pm UTC
 *
 * @property string tipo_equipo
 */
class Equipo extends Model
{
    use SoftDeletes;

    public $table = 'equipos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'tipo_equipo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tipo_equipo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
