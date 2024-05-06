<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        Listing::factory(6)->create();
        // Listing::create([
        //     'title' => 'Laravel senio dev',
        //     'tags' => 'Laravel, Javascript',
        //     'company' => 'boston',
        //     'location'=> 'gkasfj',
        //     'email' =>'email.com',
        //     'website' => 'joy.com',
        //     'description' => 'i love dancing in the rain while cooking in side the house as you can see i love it thew way it is when going to ,arketr amd loving what i do'
        // ]);
        // Listing::create([
        //     'title' => 'Laravel senio dev',
        //     'tags' => 'Laravel, Javascript',
        //     'company' => 'boston',
        //     'location'=> 'gkasfj',
        //     'email' =>'email.com',
        //     'website' => 'joy.com',
        //     'description' => 'i love dancing in the rain while cooking in side the house as you can see i love it thew way it is when going to ,arketr amd loving what i do'
        // ]);
    }
}
