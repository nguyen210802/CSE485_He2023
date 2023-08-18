<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Channel;
use Faker\Factory as Fake;
class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Fake::create();
        for($i=0; $i<20; $i++){
            Channel::create([
                'ChannelName' => $faker->name,
                'Description' => $faker->sentence,
                'SubscribersCount' => $faker->numberBetween(1000, 10000),
                'URL' => $faker->url,
            ]);
        }
    }
}
