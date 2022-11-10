<?php

use Illuminate\Database\Seeder;
use Iluminate\Support\Facades\DB;

class TrainersTableSeeder extends Seeder
{
    static $trainers = [
        'Apellido',
        'Avatar'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$trainers as $trainer) {
            DB::table('trainers')->insert([
                'name' => $trainer,
               
            ]);
        }
    }
}
