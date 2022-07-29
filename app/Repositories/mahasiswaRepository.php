<?php

namespace App\Repositories;

use App\Models\mahasiswa;
use App\Repositories\BaseRepository;

/**
 * Class mahasiswaRepository
 * @package App\Repositories
 * @version July 29, 2022, 1:50 pm UTC
*/

class mahasiswaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'npm',
        'foto',
        'nama',
        'jk',
        'tanggal_lahir',
        'alamat',
        'keterangan'
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
        return mahasiswa::class;
    }
}
