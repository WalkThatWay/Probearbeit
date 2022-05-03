<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PitStopController extends Controller
{
    public function index()
    {

        $users=['hallo'=>'hallo2'];
        return view('pitstop', ['users' => 'Hans']);
    }
    public function importInDB(){
        $response = Http::get('http://ergast.com/api/f1/2022/1/pitstops.json');
        //$object=json_decode($response->json());
        var_dump($response->object()->MRData->RaceTable->Races[0]->raceName);

        //return $response->json();
    }
}
