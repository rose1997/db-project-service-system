<?php

use Illuminate\Database\Seeder;

class umbrellaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	DB::table('umbrella')->insert([
		['id' => '1','service_id' => '3','request_account' => '104403511','receive_account' => '104403512','request_time' => '2017-05-28 16:05:19','receive_time' => '2017-05-28 16:05:50', 'finish_time' => '2017-05-28 16:07:00', 'is_done' => '1'],
		['id' => '2','service_id' => '4','request_account' => '104403511','receive_account' => '104403508','request_time' => '2017-05-28 16:50:19','receive_time' => '2017-05-28 16:50:50', 'finish_time' => '2017-05-28 17:00:00', 'is_done' => '1'],
		['id' => '3','service_id' => '5','request_account' => '104403508','receive_account' => '104403511','request_time' => '2017-05-29 16:05:19','receive_time' => '2017-05-29 16:08:19', 'finish_time' => '2017-05-29 16:10:19', 'is_done' => '1'],
	]);
    }
}
