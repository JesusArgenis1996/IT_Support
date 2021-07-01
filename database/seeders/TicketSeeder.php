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
            'date' => Carbon::now(),
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
            'date' => Carbon::now(),
            'status' => 'In Progress'

        ]);
        DB::table('tickets')->insert([
            'user_id' => 2,
            'current_location'=> 'DF, Mexico',
            'service' => 'IT Support',
            'urgency' => 'Medium',
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
            'asign_to' => 1,
            'short_description' => 'Computadora descompuesta',
            'description' => 'Computadora descompuesta primer piso',
            'date' => Carbon::now(),
            'status' => 'Canceled'

        ]);
        
    }
}
