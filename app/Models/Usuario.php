<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Usuario
 * @package App\Models
 * @version June 12, 2019, 1:23 pm UTC
 *
 * @property string nombre
 * @property string apellido
 * @property string ci
 * @property string telefono
 * @property string rol
 */
class Usuario extends Model
{
    use SoftDeletes;

    public $table = 'users';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'apellido',
        'ci',
        'telefono',
        'rol',
        'estado',
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
        'nombre' => 'string',
        'apellido' => 'string',
        'ci' => 'string',
        'telefono' => 'string',
        'rol' => 'string',
        'estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|string|regex:/^[A-Z, ]+$/',
        'apellido' => 'required|string|regex:/^[A-Z, ]/',
        'ci' => 'string|unique:users|min:6|max:10|regex:/^([0-9]{6,8})+[A-Z]{0,2}/',
       
        
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
    public function E_informaticos()
    {
        return $this->Hasmany(E_informatico::class);
    }

    

    
}
