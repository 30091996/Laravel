<?php

namespace App\Http\Controllers;

use App\Proizvod;
use Illuminate\Http\Request;

class ProizvodController extends Controller
{
    public function proizvodi()
    {
        $proizvodi = Proizvod::all();

        return response()->json([
            'proizvodi' => $proizvodi
        ]);
    }
}
