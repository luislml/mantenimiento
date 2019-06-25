<?php

namespace App\Repositories;

use App\Models\E_informatico;
use App\Repositories\BaseRepository;

/**
 * Class E_informaticoRepository
 * @package App\Repositories
 * @version June 12, 2019, 8:34 pm UTC
*/

class E_informaticoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'mac',
        'numero_activo',
        'modelo',
        'numero_serie'
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
        return E_informatico::class;
    }
}
