<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;
    protected $fillable = [
        'guru_id',
        'mata_pelajaran_id',
        'bobot',
        'file',
        'type_file',
        'soal',
        'opsi_a',
        'opsi_b',
        'opsi_c',
        'opsi_d',
        'file_a',
        'file_b',
        'file_c',
        'file_d',
        'jawaban'
    ];

    protected $table = 'soal';

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id', 'id');
    }
}
