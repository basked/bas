<?php

namespace Database\Seeders;

use App\Models\PivotStatus;
use App\Models\Status;
use Illuminate\Database\Seeder;

class PivotStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = Status::all();
        foreach ($statuses as $current_status) {
            foreach ($statuses as $next_status) {
                PivotStatus::factory()->create([
                    'current_status_id' => $current_status->id,
                    'next_status_id' => $next_status->id,
                    'access' => $current_status->id == $next_status->id,
                ]);
            }
        }
    }
}
