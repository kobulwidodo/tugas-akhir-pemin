<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class KrsController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */

  //
  public function addMatkul(Request $request, $mkid)
  {
    $user = $request->user;

    $user->matakuliah()->attach($mkid);

    return response()->json([
      'success' => true,
      'message' => 'berhasil menambahkan matkul',
    ]);
  }

  public function deleteMatkul(Request $request, $mkid)
  {
    $user = $request->user;

    $user->matakuliah()->detach($mkid);

    return response()->json([
      'success' => true,
      'message' => 'berhasil menghapus matkul',
    ]);
  }
}
