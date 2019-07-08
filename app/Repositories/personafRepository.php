<?php

namespace App\Repositories;

use App\Models\personaf;
use App\Repositories\BaseRepository;

/**
 * Class personafRepository
 * @package App\Repositories
 * @version July 2, 2019, 12:56 am UTC
*/

class personafRepository extends BaseRepository
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
        return personaf::class;
    }
}
