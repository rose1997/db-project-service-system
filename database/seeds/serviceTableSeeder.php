<?php

use Illuminate\Database\Seeder;

class serviceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	DB::table('service')->insert([
		['id' => '1','request_account' => '104403512','receive_account' => '104403511','trans_mode' => 'trash','trans_money' => '10', 'start_name' => 'londonsomewhere','end_name' => 'londonsomewhere','start_lng' => '121.193809','start_lat' => '24.971047','end_lng' => '121.193809','end_lat' => '24.971047'],
		['id' => '2','request_account' => '104403011','receive_account' => '104403508','trans_mode' => 'trash','trans_money' => '10', 'start_name' => 'londonsomewhere','end_name' => 'londonsomewhere','start_lng' => '121.193809','start_lat' => '24.971047','end_lng' => '121.193809','end_lat' => '24.971047'],
		['id' => '3','request_account' => '104403511','receive_account' => '104403512','trans_mode' => 'umbrella','trans_money' => '10', 'start_name' => 'londonsomewhere','end_name' => 'londonsomewhere','start_lng' => '121.193809','start_lat' => '24.971047','end_lng' => '121.193809','end_lat' => '24.971047'],
		['id' => '4','request_account' => '104403511','receive_account' => '104403508','trans_mode' => 'umbrella','trans_money' => '10', 'start_name' => 'londonsomewhere','end_name' => 'londonsomewhere','start_lng' => '121.193809','start_lat' => '24.971047','end_lng' => '121.193809','end_lat' => '24.971047'],
		['id' => '5','request_account' => '104403508','receive_account' => '104403511','trans_mode' => 'umbrella','trans_money' => '10', 'start_name' => 'londonsomewhere','end_name' => 'londonsomewhere','start_lng' => '121.193809','start_lat' => '24.971047','end_lng' => '121.193809','end_lat' => '24.971047'],
		['id' => '6','request_account' => '104403511','receive_account' => '104403011','trans_mode' => 'trash','trans_money' => '10', 'start_name' => 'londonsomewhere','end_name' => 'londonsomewhere','start_lng' => '121.193809','start_lat' => '24.971047','end_lng' => '121.193809','end_lat' => '24.971047'],
	]);
    }
}
