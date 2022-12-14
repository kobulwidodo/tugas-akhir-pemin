<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Matakuliah extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var string[]
   */
  protected $fillable = [
    'nama'
  ];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var string[]
   */
  protected $hidden = [];

  public function mahasiswas()
  {
    return $this->belongsToMany(Mahasiswa::class, 'mahasiswa_matakuliah', 'mkId', 'mhsId');
  }
}
