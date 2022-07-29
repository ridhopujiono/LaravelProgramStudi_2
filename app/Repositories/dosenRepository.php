<?php

namespace App\Repositories;

use App\Models\dosen;
use App\Repositories\BaseRepository;

/**
 * Class dosenRepository
 * @package App\Repositories
 * @version July 29, 2022, 1:56 pm UTC
*/

class dosenRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nidn',
        'foto',
        'nama',
        'jk',
        'tanggal_lahir',
        'alamat',
        'mata_pelajaran'
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
        return dosen::class;
    }
}
