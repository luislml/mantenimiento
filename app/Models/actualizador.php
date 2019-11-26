<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class actualizador
 * @package App\Models
 * @version November 14, 2019, 4:26 pm UTC
 *
 * @property string fecha
 * @property string bits
 * @property string actualizador
 */
class actualizador extends Model
{
    use SoftDeletes;

    public $table = 'actualizadors';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'fecha',
        'bits',
        'actualizador'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha' => 'string',
        'bits' => 'string',
        'actualizador' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fecha' => 'required',
        'bits' => 'required',
        'actualizador' => 'required'
    ];

    
}
