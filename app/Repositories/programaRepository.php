<?php

namespace App\Repositories;

use App\Models\programa;
use App\Repositories\BaseRepository;

/**
 * Class programaRepository
 * @package App\Repositories
 * @version November 14, 2019, 3:59 pm UTC
*/

class programaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'bits',
        'archivo'
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
        return programa::class;
    }
}
