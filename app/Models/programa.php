<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class programa
 * @package App\Models
 * @version November 14, 2019, 3:59 pm UTC
 *
 * @property string nombre
 * @property string bits
 * @property string archivo
 */
class programa extends Model
{
    use SoftDeletes;

    public $table = 'programas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'bits',
        'archivo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'bits' => 'string',
        'archivo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'archivo' => 'required',
        'bits' => 'required'

    ];

    
}
