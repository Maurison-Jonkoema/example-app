<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = DB::table('planets')->get();
        dd($planets);
    }

    public function show($planet)
    {
        $planets = DB::table('planets')->where('name', $planet)->get();
        dd($planets);
    }
}
