<?php

use Illuminate\Database\Seeder;

class SiswaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $model = new \Deki\SiswaModel;
      $model->nama_lengkap = "Deki";
      $model->jk = "laki-laki";
      $model->foto = "";
      $model->id_kelas = 1;
      $model->save();
    }
}
