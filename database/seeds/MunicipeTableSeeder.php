<?php

use Illuminate\Database\Seeder;
use App\Models\Municipe;

class MunicipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Municipe::class, 100)->create();
    }
}
