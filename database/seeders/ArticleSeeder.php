<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $catDS = Category::where('name', 'Data Science')->first()->id;
        $catNS = Category::where('name', 'Network Security')->first()->id;
        $writers = Writer::pluck('id')->toArray();

        $dsTopics = ['Machine Learning', 'Deep Learning', 'Natural Language Processing'];
        $dsImages = ['machine_learning.jpg', 'deep_learning.jpg', 'natural_language_processing.jpg'];
        foreach ($dsTopics as $index => $topic) {
            Article::create([
                'title' => $topic,
                'content' => implode("\n\n", [
                                $faker->paragraph(30),
                                $faker->paragraph(30),
                            ]),
                'category_id' => $catDS,
                'writer_id' => $faker->randomElement($writers),
                'views' => rand(100, 300),
                'image' => 'image/' . $dsImages[$index],
            ]);
        }

        $nsTopics = ['Software Security', 'Network Administration', 'Popular Network Technology'];
        $nsImages = ['software_security.jpg', 'network_administration.jpg', 'popular_network_technology.jpg'];
        foreach ($nsTopics as $index => $topic) {
            Article::create([
                'title' => $topic,
                'content' => implode("\n\n", [
                                $faker->paragraph(30),
                                $faker->paragraph(30),
                            ]),
                'category_id' => $catNS,
                'writer_id' => $faker->randomElement($writers),
                'views' => rand(80, 250),
                'image' => 'image/' . $nsImages[$index],
            ]);
        }
    }
}