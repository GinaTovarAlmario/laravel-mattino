<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        DB::table('films')->truncate();
        for($i = 0 ; $i < 30 ; $i++){
            DB::table('films')->insert([
                'title' => $faker->realTextBetween(10,20),
                'author'=> $faker->name(),
                'date'=> $faker->date(),
                'vote'=> $faker->randomNumber(1,10),
                'content'=> $faker->text(255),
                'created_at' => now(),
                'updated_at'=>now(),
            ]);
        }
        // oops


        // qualcosa e' stato aggiunto

        // ooooops
    }
}
