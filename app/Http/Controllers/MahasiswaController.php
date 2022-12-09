<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    //
  }
  //
  public function getAll()
  {
    $mahasiswas = Mahasiswa::with('prodi', 'matakuliah')->get();

    return response()->json([
      'success' => true,
      'message' => 'berhasil mendapatkan mahasiswa',
      'mahasiswa' => $mahasiswas
    ]);
  }

  public function getByNim($nim)
  {
    $mahasiswas = Mahasiswa::with('matakuliah', 'prodi')->where('nim', $nim)->first();
    if (!$mahasiswas) {
      return response()->json([
        'success' => false,
        'message' => 'mahasiswa tidak ditemukan',
      ], 404);
    }

    return response()->json([
      'success' => true,
      'message' => 'berhasil mendapatkan mahasiswa',
      'mahasiswa' => $mahasiswas
    ]);
  }

  public function getMe(Request $request)
  {
    $me = $request->user;
    $mahasiswas = Mahasiswa::where('nim', $me->nim)->first();
    if (!$mahasiswas) {
      return response()->json([
        'success' => false,
        'message' => 'mahasiswa tidak ditemukan',
      ], 404);
    }

    return response()->json([
      'success' => true,
      'message' => 'berhasil mendapatkan mahasiswa',
      'mahasiswa' => $mahasiswas
    ]);
  }
}
