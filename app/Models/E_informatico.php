<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class E_informatico
 * @package App\Models
 * @version June 12, 2019, 8:34 pm UTC
 *
 * @property string nombre
 * @property string mac
 * @property integer numero_activo
 * @property string modelo
 * @property integer numero_serie
 */
class E_informatico extends Model
{
    use SoftDeletes;

    public $table = 'e_informaticos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'mac_ethernet',
        'mac_inalambrico',
        'numero_activo',
        'modelo',
        'marca',
        'numero_serie',
        'memoria_ram',
        'disco_duro',
        'tarjeta_video',
        's_o',
        'procesador',
        'tipo_impresora',
        'detalle',
        'usuario_id',
        'unidad_id',
        'area_id',
        'sub_area_id',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'mac' => 'string',
        'numero_activo' => 'integer',
        'modelo' => 'string',
        'marca' => 'string',
        'numero_serie' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => ''
    ];
    
     public function unidad()
    {
        return $this->belongsTo(Unidad::class);
    }
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
    public function sub_area()
    {
        return $this->belongsTo(Sub_Area::class);
    }
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
    public function mantenimientos()
    {
        return $this->hasMany(Mantenimiento::class);
    }
    public function historial()
    {
        return $this->Hasmany(Historiale::class);
    }

    
}
