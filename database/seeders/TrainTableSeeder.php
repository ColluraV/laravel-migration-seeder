<?php

namespace Database\Seeders;

use App\Models\train;
use App\Models\Train as ModelsTrain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $compagnieFerroviarie=["Trenitalia", "Italo", "Deutsche Bahn", "Renfe", "Frecciargento", "Intercity Notte", "Eurocity", "InterCity", "TGV", "RegioExpress", "Frecciarossa", "Frecciabianca"];


        for ($i = 0; $i < 10; $i++){
            
            $train=new Train();


            $train->azienda=$compagnieFerroviarie[array_rand($compagnieFerroviarie)];
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->stazione_arrivo = $faker->city();
                
            if($train->stazione_partenza == $train->stazione_arrivo){
                    $train->stazione_arrivo = $faker->city();
                }
                
            $train->orario_partenza = $faker->dateTimeInInterval('-1 week', '+1 week');
            $train->orario_arrivo = $faker->dateTimeInInterval('-1 week', '+1 week');
            
            if($train->orario_partenza >= $train->orario_arrivo){
                $train->orario_arrivo = $faker->city();
            }
            $train->codice_treno=$faker->numberBetween(1111, 9999);
            $train->numero_carrozza= $faker->numberBetween(4, 12);
            $train->in_orario=$faker->boolean();
            $train->cancellato=$faker->boolean();

            $train->save();

        }


    }
}
