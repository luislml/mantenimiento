<?php

namespace App\Repositories;

use App\Models\Sub_Area;
use App\Repositories\BaseRepository;

/**
 * Class Sub_AreaRepository
 * @package App\Repositories
 * @version June 25, 2019, 4:39 am UTC
*/

class Sub_AreaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'area_id',
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
        return Sub_Area::class;
    }
}
