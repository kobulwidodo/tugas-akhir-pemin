<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;

class MatakuliahController extends Controller
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
    $matakuliahs = Matakuliah::All();

    return response()->json([
      'success' => true,
      'message' => 'berhasil mendapatkan matakuliah',
      'matakuliah' => $matakuliahs
    ]);
  }
}
