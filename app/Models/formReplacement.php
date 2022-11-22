<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class formReplacement extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'form_replacements';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['namaLengkap', 'mataKuliah', 'kelas', 'programStudi', 'semester', 'tahunAkademik', 'tanggalReplacement', 'jamKuliah', 'tanggalReplacement', 'jamreplacement', 'alasan'];

    
}
