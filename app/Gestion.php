<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Gestion
 * @package App\Models
 * @version July 24, 2019, 2:00 pm UTC
 *
 * @property string gestion
 * @property string estado
 */
class Gestion extends Model
{
    use SoftDeletes;

    public $table = 'gestions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'gestion',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'gestion' => 'string',
        'estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function cites()
    {
        return $this->Hasmany(Cite::class);
    }
    
}
