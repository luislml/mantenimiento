<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Recomendacion
 * @package App\Models
 * @version July 25, 2019, 7:40 pm UTC
 *
 * @property string recomendacion
 * @property integer cite_id
 */
class Recomendacion extends Model
{
    use SoftDeletes;

    public $table = 'recomendacions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'recomendacion',
        'cite_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'recomendacion' => 'string',
        'cite_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
