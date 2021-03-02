<?php

use App\Proizvod;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Porudzbina extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $broj_porudzbina = rand(15, 32);
        for ($i = 0; $i < $broj_porudzbina; $i++) {
            $proizvod_id = rand(1, 17);
            $proizvod = Proizvod::find($proizvod_id);
            $na_lageru = $proizvod->na_lageru;
            $broj_porucenih_proizvoda = rand(7, 15);

            if ($na_lageru - $broj_porucenih_proizvoda >= 0) {
                DB::table('porudzbina')->insert([
                    'ime_prezime' => Str::random(7) . " " . Str::random(rand(5, 9)),
                    'email' => Str::random(8) . "@gmail.com",
                    'adresa' => Str::random(5) . " " . Str::random(rand(1, 7)) . " " . rand(1, 243),
                    'broj_telefona' => "06" . rand(1, 9) . "" . rand(1, 9) . "" . rand(1, 9) . "" . rand(1, 9) . "" . rand(1, 9) . "" . rand(1, 9) . "" . rand(1, 9),
                    'broj_porucenih_proizvoda' => $broj_porucenih_proizvoda,
                    'proizvod_id' => $proizvod_id,
                ]);
                Proizvod::find($proizvod_id)->decrement('na_lageru', $broj_porucenih_proizvoda);
            }
        }
    }
}
