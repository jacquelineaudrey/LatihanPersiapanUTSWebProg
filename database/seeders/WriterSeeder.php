<?php

namespace Database\Seeders;

use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $images = ['person1.jpg', 'person2.jpg', 'person3.jpg'];
        foreach (range(1,3) as $i) {
            Writer::create([
                'name' => $faker->name(),
                'job' => $faker->jobTitle(),
                'image' => 'image/' . $images[$i-1],
            ]);
        }
    }
}