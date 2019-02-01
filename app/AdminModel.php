<?php

namespace Ade;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
  protected $table = 'tabel_admin';
  protected $primaryKey = 'id_admin';
  public $timestamps = true;
  protected $fillable = [
    'username','password'
  ];
}
