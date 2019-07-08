<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Sub_Area
 * @package App\Models
 * @version June 25, 2019, 4:39 am UTC
 *
 * @property integer area_id
 * @property string|unique nombre
 */
class Sub_Area extends Model
{
    use SoftDeletes;

    public $table = 'sub__areas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'area_id',
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'area_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required'
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    
}
