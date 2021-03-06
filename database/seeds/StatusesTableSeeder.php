<?php

use Illuminate\Database\Seeder;
use App\Models\Status;
use App\Models\User;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = factory(Status::class)->times(100)->create();
    }
}
