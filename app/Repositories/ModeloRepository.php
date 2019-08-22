<?php

namespace App\Repositories;

use App\Models\Modelo;
use App\Repositories\BaseRepository;

/**
 * Class ModeloRepository
 * @package App\Repositories
 * @version August 19, 2019, 7:18 pm UTC
*/

class ModeloRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'modelo'
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
        return Modelo::class;
    }
}
