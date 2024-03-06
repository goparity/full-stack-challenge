<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Amortization;
use App\Models\Project;
use Carbon\Carbon;
use Faker;

class AmortizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker\Factory::create();
        $projects = Project::all();
        foreach($projects as $project) {
            $state = $faker->randomElement(['pending', 'paid']);
            $start_date_paid = Carbon::now()->subMonths(40);
            $start_date_unpaid = Carbon::now()->subMonths(20);
            $amount = $project->investment_goal / 40;

            for ($i = 0; $i <= 40; $i++) {
                $amortization = new Amortization();
                $amortization->project_id = $project->id;
                $amortization->promoter_id = $project->promoter_id;
                $amortization->amount = $amount;
                $amortization->state = $state;
                $amortization->schedule_date = $state === 'paid' ? Carbon::parse($start_date_paid)->addMonths($i)->format('Y-m-d') : Carbon::parse($start_date_unpaid)->addMonths($i)->format('Y-m-d');
                $amortization->save();
            }
        }
    }
}
