<?php

namespace App\Repositories;

use App\Models\mata_kuliah;
use App\Repositories\BaseRepository;

/**
 * Class mata_kuliahRepository
 * @package App\Repositories
 * @version July 29, 2022, 3:55 pm UTC
*/

class mata_kuliahRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama'
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
        return mata_kuliah::class;
    }
}
