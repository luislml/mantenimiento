<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Historiale
 * @package App\Models
 * @version August 22, 2019, 7:24 pm UTC
 *
 * @property integer usuario_id
 * @property integer e_informatico_id
 * @property integer unidad_id
 * @property integer area_id
 * @property integer sub_area_id
 */
class Historiale extends Model
{
    use SoftDeletes;

    public $table = 'historiales';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'usuario_id',
        'e_informatico_id',
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
        'usuario_id' => 'integer',
        'e_informatico_id' => 'integer',
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

    public function equipos()
    {
        return $this->belongsTo(E_informatico::class);
    }

    
}
