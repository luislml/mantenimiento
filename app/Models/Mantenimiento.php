<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Mantenimiento
 * @package App\Models
 * @version July 18, 2019, 6:48 pm UTC
 *
 * @property integer e_informatico_id
 * @property string fecha
 * @property string descripcion
 */
class Mantenimiento extends Model
{
    use SoftDeletes;

    public $table = 'mantenimientos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'e_informatico_id',
        'fecha',
        'descripcion',
        'usuario_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'e_informatico_id' => 'integer',
        'fecha' => 'date',
        'descripcion' => 'string'
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
        return $this->belongsTo(E_informatico::class,'e_informatico_id');
    }

    public function cite()
    {
        return $this->hasOne(Cite::class);
    }
    
}
