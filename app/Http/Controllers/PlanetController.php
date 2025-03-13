<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Planet;

class PlanetController extends Controller
{
    public function index()
    {
        //$planets = DB::table('planets')->get();
        $planets = Planet::all();
       // dd($planets);
        return view('planets')->with(['planets' => $planets]);
    }

    public function show($planet)
    {
        $planets = DB::table('planets')->where('name', $planet)->get();
        dd($planets);
    }
}
