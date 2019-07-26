<?php

namespace App\Repositories;

use App\Models\Mantenimiento;
use App\Repositories\BaseRepository;

/**
 * Class MantenimientoRepository
 * @package App\Repositories
 * @version July 18, 2019, 6:48 pm UTC
*/

class MantenimientoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'e_informatico_id',
        'fecha',
        'descripcion'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Mantenimiento::class;
    }
}
