<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;
class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->insert([
            'user_id' => 2,
            'current_location'=> 'Los Angeles, California',
            'service' => 'IT Support',
            'urgency' => 'High',
            'asign_to' => 1,
            'short_description' => 'Computadora descompuesta',
            'description' => 'Computadora descompuesta primer piso',
            'date' => '2020-07-01 15:47:54',
            'status' => 'New'

        ]);
        DB::table('tickets')->insert([
            'user_id' => 2,
            'current_location'=> 'Mexicali, Baja California',
            'service' => 'IT Support',
            'urgency' => 'Low',
            'asign_to' => 2,
            'short_description' => 'Red Descompuesta',
            'description' => 'No hay red en el piso',
            'date' => '2021-07-01 1:47:54',
            'status' => 'In Progress'

        ]);
        DB::table('tickets')->insert([
            'user_id' => 2,
            'current_location'=> 'DF, Mexico',
            'service' => 'IT Support',
            'urgency' => 'Moderate',
            'asign_to' => null,
            'short_description' => 'Tonner',
            'description' => 'Falta tonner en impresora RH',
            'date' => '2021-12-01 15:47:54',
            'status' => 'Completed'

        ]);
        DB::table('tickets')->insert([
            'user_id' => 2,
            'current_location'=> 'Los Angeles, California',
            'service' => 'IT Support',
            'urgency' => 'Low',
            'asign_to' => null,
            'short_description' => 'Computadora descompuesta',
            'description' => 'Computadora descompuesta primer piso',
            'date' => '2021-07-05 6:47:54',
            'status' => 'Canceled'

        ]);

        DB::table('tickets')->insert([
            'user_id' => 2,
            'current_location'=> 'Los Angeles, California',
            'service' => 'IT Support',
            'urgency' => 'High',
            'asign_to' => 3,
            'short_description' => 'Computadora descompuesta',
            'description' => 'Computadora descompuesta primer piso',
            'date' => '2021-07-01 21:47:54',
            'status' => 'New'

        ]);
        DB::table('tickets')->insert([
            'user_id' => 2,
            'current_location'=> 'Mexicali, Baja California',
            'service' => 'IT Support',
            'urgency' => 'Low',
            'asign_to' => 1,
            'short_description' => 'Red Descompuesta',
            'description' => 'No hay red en el piso',
            'date' => '2021-07-01 15:10:54',
            'status' => 'In Progress'

        ]);
        DB::table('tickets')->insert([
            'user_id' => 2,
            'current_location'=> 'DF, Mexico',
            'service' => 'IT Support',
            'urgency' => 'Moderate',
            'asign_to' => 1,
            'short_description' => 'Tonner',
            'description' => 'Falta tonner en impresora RH',
            'date' => Carbon::now(),
            'status' => 'Completed'

        ]);
        DB::table('tickets')->insert([
            'user_id' => 2,
            'current_location'=> 'Los Angeles, California',
            'service' => 'IT Support',
            'urgency' => 'Low',
            'asign_to' => 4,
            'short_description' => 'Computadora descompuesta',
            'description' => 'Computadora descompuesta primer piso',
            'date' => Carbon::now(),
            'status' => 'Canceled'

        ]);

        DB::table('tickets')->insert([
            'user_id' => 2,
            'current_location'=> 'Los Angeles, California',
            'service' => 'IT Support',
            'urgency' => 'High',
            'asign_to' => null,
            'short_description' => 'Computadora descompuesta',
            'description' => 'Computadora descompuesta primer piso',
            'date' => '2021-02-01 15:03:54',
            'status' => 'New'

        ]);
        DB::table('tickets')->insert([
            'user_id' => 2,
            'current_location'=> 'Mexicali, Baja California',
            'service' => 'IT Support',
            'urgency' => 'Low',
            'asign_to' => 3,
            'short_description' => 'Red Descompuesta',
            'description' => 'No hay red en el piso',
            'date' => '2021-03-01 15:47:54',
            'status' => 'In Progress'

        ]);
        DB::table('tickets')->insert([
            'user_id' => 2,
            'current_location'=> 'DF, Mexico',
            'service' => 'IT Support',
            'urgency' => 'Moderate',
            'asign_to' => null,
            'short_description' => 'Tonner',
            'description' => 'Falta tonner en impresora RH',
            'date' => Carbon::now(),
            'status' => 'Completed'

        ]);
        DB::table('tickets')->insert([
            'user_id' => 2,
            'current_location'=> 'Los Angeles, California',
            'service' => 'IT Support',
            'urgency' => 'Low',
            'asign_to' => 1,
            'short_description' => 'Computadora descompuesta',
            'description' => 'Computadora descompuesta primer piso',
            'date' => '2021-07-01 15:47:54',
            'status' => 'Canceled'

        ]);
        
    }
}
