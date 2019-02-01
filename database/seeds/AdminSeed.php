<?php

use Illuminate\Database\Seeder;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = new \Deki\AdminModel;
        $model->username = "admin";
        $model->password = md5("admin");
        $model->save();

    }
}
