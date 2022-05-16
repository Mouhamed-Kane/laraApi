<?php

namespace Database\Seeders;

use App\Models\Annonce;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnnonceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Annonce::create([
            'titre' =>  'Téléphone portable',
            'description' => 'Téléphone portable en bon état',
            'image' => 'https://bit.ly/39uoMWB',
            'telephone' => '0612345678',
            'prix' => '100000',
            'categories_id' => 1,
        ]);
        Annonce::create([
            'titre' =>  'Lacoste',
            'description' => 'Lacoste en bon état',
            'image' => 'https://bit.ly/3sFm5rI',
            'telephone' => '0612345678',
            'prix' => '7000',
            'categories_id' => 2,
        ]);
    }
}
