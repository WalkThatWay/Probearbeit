<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Services\DriversRestClientService;

class PageController extends Controller
{
    /**
     * @var DriversRestClientService
     */
    private $driversRestClient;

    public function __construct(DriversRestClientService $driversRestClient)
    {
        $this->driversRestClient = $driversRestClient;
    }

    public function index()
    {
        return view('index',['text' => '']);
    }

    public function importInDB()
    {
        $drivers = $this->driversRestClient->getDrivers();

        foreach ($drivers as $driverFromRest) {
            $driverDb = new Driver();

            //Mapping
            $driverDb->driverId = $driverFromRest->driverId;
            $driverDb->DriverName = $driverFromRest->givenName . ' '
                . $driverFromRest->familyName;
            $driverDb->DOB = $driverFromRest->dateOfBirth;
            $driverDb->PermanentNumber = $driverFromRest->permanentNumber;
            $driverDb->Nationality = $driverFromRest->nationality;
            $driverDb->Information = $driverFromRest->url;

            try {
                //write in db
                $driverDb->save();
            } catch (\Illuminate\Database\QueryException $e) {
                if ($e->errorInfo[0]) {
                    return view(
                        'index',
                        ['text' => 'Daten waren schon importiert!']
                    );
                }
            }
        }

        return view('index',['text' => 'Daten sind importiert!']);
    }
}
