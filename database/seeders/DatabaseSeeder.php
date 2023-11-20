<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call([
            AdminSeeder::class,
            PlanSeeder::class,
        ]);
    }
}
