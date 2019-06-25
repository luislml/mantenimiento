<?php

namespace App\Repositories;

use App\Models\Unidad;
use App\Repositories\BaseRepository;

/**
 * Class UnidadRepository
 * @package App\Repositories
 * @version June 14, 2019, 7:41 pm UTC
*/

class UnidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
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
        return Unidad::class;
    }
}
