<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class mata_kuliah
 * @package App\Models
 * @version July 29, 2022, 3:55 pm UTC
 *
 * @property string $nama
 */
class mata_kuliah extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'mata_kuliahs';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required'
    ];

    
}
