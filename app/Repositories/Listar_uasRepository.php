<?php

namespace App\Repositories;

use App\Models\Listar_uas;
use App\Repositories\BaseRepository;

/**
 * Class Listar_uasRepository
 * @package App\Repositories
 * @version July 4, 2019, 4:25 am UTC
*/

class Listar_uasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'unidades',
        'areas',
        'sub_areas'
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
        return Listar_uas::class;
    }
}
