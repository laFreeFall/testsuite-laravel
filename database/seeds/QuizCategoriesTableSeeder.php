<?php

use Illuminate\Database\Seeder;

class QuizCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quizCategories = [
            ['title' => 'Science'],
            ['title' => 'Nature'],
            ['title' => 'Technologies'],
            ['title' => 'Psychology'],
            ['title' => 'Other'],
        ];

        DB::table('quiz_categories')->insert($quizCategories);
    }
}
