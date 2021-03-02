<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Proizvod extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 17; $i++) {
            $na_lageru = rand(20, 63);
            DB::table('proizvod')->insert([
                'naziv_proizvoda' => Str::random(5),
                'na_lageru' => $na_lageru,
                'opis_proizvoda' =>  $this->random_recenica(),
            ]);
        }
    }

    public function random_recenica()
    {
        $pocetnaRecenica = "";
        for ($i = 0; $i < 25; $i++) {

            $pocetnaRecenica .= Str::random(rand(2, 4));
            if (rand(0, 1)) {
                $pocetnaRecenica .= " ";
            }
        }
        return $pocetnaRecenica;
    }
}
