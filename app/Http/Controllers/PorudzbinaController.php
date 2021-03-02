<?php

namespace App\Http\Controllers;

use App\Porudzbina;
use App\Proizvod;
use Illuminate\Http\Request;

class PorudzbinaController extends Controller
{
    public function porudzbine()
    {
        $porudzbine = Porudzbina::with('proizvod')->orderByRaw("proizvod_id")->get();

        return response()->json([
            'porudzbine' => $porudzbine
        ]);
    }

    public function skiniPorudzbina(Request $request)
    {
        $id = $request->input('id');
        $porudzbina = Porudzbina::find($id);
        $proizvod = Porudzbina::find($id)->proizvod()->get();

        $proizvod_id = $proizvod[0]->id;
        Proizvod::find($proizvod_id)->increment('na_lageru', $porudzbina->broj_porucenih_proizvoda);
        Porudzbina::find($id)->delete();
    }

    public function novaPorudzbina(Request $request)
    {

        $broj_porucenih_proizvoda = $request->input('broj_porucenih_proizvoda');
        $proizvod_id = $request->input('proizvod_id');

        $proizvod = Proizvod::find($proizvod_id);
        $na_lageru = $proizvod->na_lageru;
        if ($na_lageru - $broj_porucenih_proizvoda >= 0) {
            $ime_prezime = $request->input('ime_prezime');
            $email = $request->input('email');
            $adresa = $request->input('adresa');
            $broj_telefona = $request->input('broj_telefona');

            Porudzbina::insert([
                'ime_prezime' => $ime_prezime,
                'adresa' => $adresa,
                'broj_telefona' => $broj_telefona,
                'email' => $email,
                'broj_porucenih_proizvoda' => $broj_porucenih_proizvoda,
                'proizvod_id' => $proizvod_id
            ]);
            Proizvod::find($proizvod_id)->decrement('na_lageru', $broj_porucenih_proizvoda);
            return view("cvecara");
        } else
            return view("cvecara");
    }
}
