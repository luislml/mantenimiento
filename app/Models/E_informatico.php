<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class E_informatico
 * @package App\Models
 * @version June 12, 2019, 8:34 pm UTC
 *
 * @property string nombre
 * @property string mac
 * @property integer numero_activo
 * @property string modelo
 * @property integer numero_serie
 */
class E_informatico extends Model
{
    use SoftDeletes;

    public $table = 'e_informaticos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'mac',
        'numero_activo',
        'modelo',
        'numero_serie'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'mac' => 'string',
        'numero_activo' => 'integer',
        'modelo' => 'string',
        'numero_serie' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required'
    ];
    

    
}
