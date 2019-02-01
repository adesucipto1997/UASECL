<?php

namespace Ade;

use Illuminate\Database\Eloquent\Model;

class KelasModel extends Model
{
  protected $table = 'tabel_kelas';
  protected $primaryKey = 'id_kelas';
  public $timestamps = true;
  protected $fillable = [
    'nama_kelas'
  ];
}
