<?php

namespace App\Repositories;

use App\Models\Herramientas;
use App\Repositories\BaseRepository;

/**
 * Class HerramientasRepository
 * @package App\Repositories
 * @version July 15, 2019, 3:09 pm UTC
*/

class HerramientasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'file'
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
        return Herramientas::class;
    }
}
