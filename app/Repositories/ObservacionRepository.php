<?php

namespace App\Repositories;

use App\Models\Observacion;
use App\Repositories\BaseRepository;

/**
 * Class ObservacionRepository
 * @package App\Repositories
 * @version July 24, 2019, 3:33 pm UTC
*/

class ObservacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'observacion',
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
        return Observacion::class;
    }
}
