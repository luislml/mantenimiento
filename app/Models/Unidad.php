<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Unidad
 * @package App\Models
 * @version June 14, 2019, 7:41 pm UTC
 *
 * @property string nombre
 */
class Unidad extends Model
{
    use SoftDeletes;

    public $table = 'unidads';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
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

    public function areas()
    {
        return $this->hasMany(Area::class);
    }

    
}
