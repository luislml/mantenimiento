<?php

namespace App\Repositories;

use App\Models\actualizador;
use App\Repositories\BaseRepository;

/**
 * Class actualizadorRepository
 * @package App\Repositories
 * @version November 14, 2019, 4:26 pm UTC
*/

class actualizadorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha',
        'bits',
        'actualizador'
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
        return actualizador::class;
    }
}
