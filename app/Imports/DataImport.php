<?php

namespace App\Imports;

use App\Models\EcuType;
use App\Models\Engine;
use App\Models\Manufacturer;
use App\Models\ModelEngine;
use App\Models\VehicleModel;
use App\Models\VehicleType;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DataImport implements ShouldQueue, WithHeadingRow, ToCollection, WithChunkReading
{


    public function __construct()
    {

    }

    public function collection(Collection $rowses)
    {

        foreach ($rowses as $rows)
        {
           // dd($rows);
           if(trim($rows['vehicle_type']) == ''){
               continue;
           }

            $vtype = VehicleType::where('name', '=', trim($rows['vehicle_type']))->first();
            if(!$vtype){

                $vtype = VehicleType::firstOrCreate([
                    'name' => trim($rows['vehicle_type'])
                ]);
            }

            $engine = Engine::where('name', '=', trim($rows['engine']))->first();
            if(!$engine){

                $engine = Engine::firstOrCreate([
                    'name' =>  trim($rows['engine']),
                    'engine_number' =>  trim($rows['engine']),
                    'engine_type' => 'Auto'
                ]);
            }


            $manufacturer = Manufacturer::where(['name' => trim($rows['manufacturer']), 'vehicle_type_id' => $vtype->id])->first();
            if(!$manufacturer){

                $manufacturer = Manufacturer::firstOrCreate([
                    'name' =>  trim($rows['manufacturer']),
                    'vehicle_type_id' => $vtype->id
                ]);
            }

            $model = VehicleModel::where(['name' => trim($rows['model']), 'manufacturer_id' => $manufacturer->id])->first();
            if(!$model){

                $model = VehicleModel::firstOrCreate([
                    'name' =>  trim($rows['model']),
                    'manufacturer_id' => $manufacturer->id
                ]);
            }


            $model_engine = ModelEngine::where(['model_id' => $model->id, 'engine_id' => $engine->id])->first();
            if(!$model_engine){

                $model_engine = ModelEngine::firstOrCreate([
                    'engine_id' =>  $engine->id,
                    'model_id' => $model->id
                ]);
            }


            $ecu = EcuType::where(['name' => trim($rows['ecu']), 'model_id' => $model->id, 'engine_id' => $engine->id])->first();
            if(!$ecu){

                $ecu = EcuType::firstOrCreate([
                    'name' => trim( $rows['ecu']),
                    'ecu_number' =>  trim($rows['ecu']),
                    'model_id' => $model->id,
                    'engine_id' => $engine->id
                ]);
            }
        }

    }

    public function chunkSize(): int
    {
        return 200;
    }



    public function headingRow(): int
    {
        return 1;
    }
}
