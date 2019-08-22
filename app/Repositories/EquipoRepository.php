<?php

namespace App\Repositories;

use App\Models\Equipo;
use App\Repositories\BaseRepository;

/**
 * Class EquipoRepository
 * @package App\Repositories
 * @version August 19, 2019, 2:21 pm UTC
*/

class EquipoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo_equipo'
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
        return Equipo::class;
    }
}
