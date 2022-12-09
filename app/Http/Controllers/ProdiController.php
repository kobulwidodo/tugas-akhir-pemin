<?php

namespace App\Http\Controllers;

use App\Models\Prodi;

class ProdiController extends Controller
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
    $prodis = Prodi::All();

    return response()->json([
      'success' => true,
      'message' => 'berhasil mendapatkan prodi',
      'prodi' => $prodis
    ]);
  }
}
