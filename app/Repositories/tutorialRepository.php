<?php

namespace App\Repositories;

use App\Models\tutorial;
use App\Repositories\BaseRepository;

/**
 * Class tutorialRepository
 * @package App\Repositories
 * @version December 11, 2019, 6:18 pm UTC
*/

class tutorialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return tutorial::class;
    }
}
