<?php

namespace Database\Seeders;

use App\Models\Status;
use Database\Factories\StatusFactory;
use Illuminate\Database\Seeder;
use function Symfony\Component\String\s;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
      Status::factory()->create(['name'=>'Begining']) ;
      Status::factory()->create(['name'=>'Completed']) ;
      Status::factory()->create(['name'=>'Closed']) ;
      Status::factory()->create(['name'=>'Archive']) ;
    }
}
