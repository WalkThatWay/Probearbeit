<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class DriversRestClientService
{
    const ENDPOINT = 'http://ergast.com/api/f1/2022/drivers.json';

    final public function getDrivers(): array
    {
        $driversObj = Http::get(self::ENDPOINT)->object();
        return $driversObj->MRData->DriverTable->Drivers;
    }

}
