<?php

use Illuminate\Database\Seeder;

class QuestionTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = \Carbon\Carbon::now();

        $questionTypes = [
            [
                'title' => 'Single Answer',
                'slug' => 'single_answer',
                'description' => null,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ],
            [
                'title' => 'Multiple Answers',
                'slug' => 'multiple_answers',
                'description' => null,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ],
            [
                'title' => 'Order',
                'slug' => 'order',
                'description' => null,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ],
            [
                'title' => 'Match',
                'slug' => 'match',
                'description' => null,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ],
            [
                'title' => 'True or False',
                'slug' => 'true_false',
                'description' => null,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ],
        ];

        DB::table('question_types')->insert($questionTypes);
    }
}
