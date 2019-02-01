<?php

use Illuminate\Database\Seeder;

class KelasSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $model = new \Deki\KelasModel;
      $model->nama_kelas = "RPL-1";
      $model->save();
    }
}
