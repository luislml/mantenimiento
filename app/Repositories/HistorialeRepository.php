<?php

namespace App\Repositories;

use App\Models\Historiale;
use App\Repositories\BaseRepository;

/**
 * Class HistorialeRepository
 * @package App\Repositories
 * @version August 22, 2019, 7:24 pm UTC
*/

class HistorialeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'usuario_id',
        'e_informatico_id',
        'unidad_id',
        'area_id',
        'sub_area_id'
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
        return Historiale::class;
    }
}
