<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Cite
 * @package App\Models
 * @version July 19, 2019, 4:32 am UTC
 *
 * @property string gestion_id
 * @property string gestion
 * @property integer mantenimiento_id
 * @property integer cite
 */
class Cite extends Model
{
    use SoftDeletes;

    public $table = 'cites';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'gestion_id',
        'gestion',
        'mantenimiento_id',
        'cite',
        'recommendation',
        'observacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'gestion_id' => 'string',
        'gestion' => 'string',
        'mantenimiento_id' => 'integer',
        'cite' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function gesttion()
    {
        return $this->belongsTo(Gestion::class,'gestion_id');
    }

    public function mantenimiento()
    {
        return $this->belongsTo(Mantenimiento::class);
    }

    public function observacion()
    {   // creamos una relación con el modelo de observacion
        return $this->hasMany(Observacion::class);
    }

    public function recomendacion()
    {   // creamos una relación con el modelo de recomendacion
        return $this->hasMany(Recomendacion::class);
    }


    
}
