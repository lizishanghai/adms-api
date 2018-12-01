<?php

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('articles')->insert(
        //     [

        //         [
        //             'category_id' => 4,
        //             'title' => '文章4',
        //             'content' => '内容4'
        //         ],
        //         [
        //             'category_id' => 5,
        //             'title' => '文章5',
        //             'content' => '内容5'
        //         ]
        //     ]
        // );

        // Let's truncate our existing records to start from scratch.
        Article::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Article::create([
                'category_id' => array_random([1, 2, 3, 4, 5, 6]),
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()

            ]);
        }

    }
}
