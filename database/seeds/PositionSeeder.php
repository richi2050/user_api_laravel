<?php

use Illuminate\Database\Seeder;
use App\Position;
class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::create([
            'name' => 'desarrollador 1'
        ]);

        Position::create([
            'name' => 'Desarrollador PHP'
        ]);
        Position::create([
            'name' => 'gerente Sistemas'
        ]);

    }
}
