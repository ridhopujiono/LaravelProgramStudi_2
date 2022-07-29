<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class mahasiswa
 * @package App\Models
 * @version July 29, 2022, 1:50 pm UTC
 *
 * @property string $npm
 * @property string $foto
 * @property string $nama
 * @property string $jk
 * @property string $tanggal_lahir
 * @property string $alamat
 * @property string $keterangan
 */
class mahasiswa extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'mahasiswas';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'npm',
        'foto',
        'nama',
        'jk',
        'tanggal_lahir',
        'alamat',
        'keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'npm' => 'string',
        'foto' => 'string',
        'nama' => 'string',
        'jk' => 'string',
        'tanggal_lahir' => 'date',
        'keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'npm' => 'required',
        'nama' => 'required',
        'jk' => 'required',
        'tanggal_lahir' => 'required',
        'alamat' => 'required',
        'keterangan' => 'required'
    ];
}
