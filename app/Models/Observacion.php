<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Observacion
 * @package App\Models
 * @version July 24, 2019, 3:33 pm UTC
 *
 * @property string observacion
 * @property integer cite_id
 */
class Observacion extends Model
{
    use SoftDeletes;

    public $table = 'observacions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'observacion',
        'cite_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'observacion' => 'string',
        'cite_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'observacion' => 'required'
    ];

    public function cite()
    {
        return $this->belongsTo(Cite::class);
    }

    
}
