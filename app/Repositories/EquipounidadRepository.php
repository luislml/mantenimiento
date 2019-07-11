<?php

namespace App\Repositories;

use App\Models\Equipounidad;
use App\Repositories\BaseRepository;

/**
 * Class EquipounidadRepository
 * @package App\Repositories
 * @version July 11, 2019, 2:49 pm UTC
*/

class EquipounidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'unidad',
        'area',
        'subarea'
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
        return Equipounidad::class;
    }
}
