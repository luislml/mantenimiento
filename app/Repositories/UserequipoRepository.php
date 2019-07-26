<?php

namespace App\Repositories;

use App\Models\Userequipo;
use App\Repositories\BaseRepository;

/**
 * Class UserequipoRepository
 * @package App\Repositories
 * @version July 11, 2019, 9:23 pm UTC
*/

class UserequipoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'usuario_id',
        'e_informatico_id'
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
        return Userequipo::class;
    }
}
