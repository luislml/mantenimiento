<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Area
 * @package App\Models
 * @version June 18, 2019, 7:44 pm UTC
 *
 * @property integer unidad_id
 * @property string nombre
 */
class Area extends Model
{
    use SoftDeletes;

    public $table = 'areas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'unidad_id',
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'unidad_id' => 'integer',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
        'nombre' => 'required'
    ];

    public function unidad()
    {
        return $this->belongsTo(Unidad::class);
    }

    
}
