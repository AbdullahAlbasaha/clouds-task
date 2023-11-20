<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'name' => 'Yearly Plan',
                'stripe_plan' => 'price_1OEDR8ASrSikBOZ8Avzgvh1O',
                'price' => 1000,
            ],
            [
                'name' => 'Monthly',
                'stripe_plan' => 'price_1OEDQZASrSikBOZ8IJhf0VhE',
                'price' => 200,
            ]
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
