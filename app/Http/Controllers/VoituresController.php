<?php

namespace App\Http\Controllers;

use App\Models\Voitures;



class VoituresController extends Controller
{
    public function index()
{
    return view('voitures/index', [
        'voitures' => Voitures::all(),
    ]);
}
}