<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Userequipo
 * @package App\Models
 * @version July 11, 2019, 9:23 pm UTC
 *
 * @property integer usuario_id
 * @property integer e_informatico_id
 */
class Userequipo extends Model
{
    use SoftDeletes;

    public $table = 'e_informaticos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'usuario_id',
        'e_informatico_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'usuario_id' => 'integer',
        'e_informatico_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'usuario_id' => 'required',
        'e_informatico_id' => 'unique:userequipos'
    ];

    
}
