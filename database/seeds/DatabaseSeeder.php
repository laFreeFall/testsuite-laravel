<?php

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
         $this->call(QuestionTypesTableSeeder::class);
         $this->call(QuizCategoriesTableSeeder::class);
    }
}
