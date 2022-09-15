<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\MataPelajaran;
use App\Models\Soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function index()
    {
        $mata_pelajaran = MataPelajaran::all();
        $kelas = Kelas::all();
        $soal = Soal::with('guru')->get();
        return view('frontend.guru.soal.index', compact('soal', 'mata_pelajaran', 'kelas'));
    }
}
