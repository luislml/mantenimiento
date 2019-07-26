<?php

namespace App\Repositories;

use App\Models\Recomendacion;
use App\Repositories\BaseRepository;

/**
 * Class RecomendacionRepository
 * @package App\Repositories
 * @version July 25, 2019, 7:40 pm UTC
*/

class RecomendacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'recomendacion',
        'cite_id'
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
        return Recomendacion::class;
    }
}
