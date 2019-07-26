<?php

namespace App\Repositories;

use App\Models\Cite;
use App\Repositories\BaseRepository;

/**
 * Class CiteRepository
 * @package App\Repositories
 * @version July 19, 2019, 4:32 am UTC
*/

class CiteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'gestion_id',
        'gestion',
        'mantenimiento_id',
        'cite'
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
        return Cite::class;
    }
}
