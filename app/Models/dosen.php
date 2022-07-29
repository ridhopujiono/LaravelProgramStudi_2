<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class dosen
 * @package App\Models
 * @version July 29, 2022, 1:56 pm UTC
 *
 * @property string $nidn
 * @property string $foto
 * @property string $nama
 * @property string $jk
 * @property string $tanggal_lahir
 * @property string $alamat
 * @property string $mata_pelajaran
 */
class dosen extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'dosens';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nidn',
        'foto',
        'nama',
        'jk',
        'tanggal_lahir',
        'alamat',
        'mata_pelajaran'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nidn' => 'string',
        'foto' => 'string',
        'nama' => 'string',
        'jk' => 'string',
        'tanggal_lahir' => 'date',
        'mata_pelajaran' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nidn' => 'required',
        'nama' => 'required',
        'jk' => 'required',
        'tanggal_lahir' => 'required',
        'alamat' => 'required',
        'mata_pelajaran' => 'required'
    ];
}
