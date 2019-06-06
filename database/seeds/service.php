<?php

use Illuminate\Database\Seeder;
use App\Services;
class service extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Services::create([
            'name' => 'seviceFirstSeeder',
            'image' => 'admin/img/img13.jpeg',
            'order' => 1
        ]);
    }
}
