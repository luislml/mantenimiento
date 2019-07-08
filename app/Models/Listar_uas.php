<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Listar_uas
 * @package App\Models
 * @version July 4, 2019, 4:25 am UTC
 *
 * @property string unidades
 * @property string areas
 * @property string sub_areas
 */
class Listar_uas extends Model
{
    use SoftDeletes;

    public $table = 'listar_uas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'unidades',
        'areas',
        'sub_areas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'unidades' => 'string',
        'areas' => 'string',
        'sub_areas' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
