<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Personal
 * @package App\Models
 * @version June 27, 2019, 11:41 am UTC
 *
 * @property string nombre
 * @property string unidad
 * @property string area
 */
class Personal extends Model
{
    use SoftDeletes;

    public $table = 'users';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
        'unidad_id' => 'integer',
        'area_id' => 'integer',
        'sub_area_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
    ];

    
}
