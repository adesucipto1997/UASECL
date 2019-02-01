<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(KelasSeed::class);
      $this->call(SiswaSeed::class);
      $this->call(AdminSeed::class);
    }
}
