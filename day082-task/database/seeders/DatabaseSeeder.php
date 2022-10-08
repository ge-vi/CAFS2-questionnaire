<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Question;
use App\Models\Variants;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $question = Question::create([
            'question_text' => 'PHP language is:',
        ]);

        Variants::create([
            'question_id' => $question->id,
            'label' => 'Interpreted programming language',
            'value' => 'q1-a1',
            'is_correct' => true,
        ]);

        Variants::create([
            'question_id' => $question->id,
            'label' => 'Compiled programming language',
            'value' => 'q1-a2',
            'is_correct' => false,
        ]);

        Variants::create([
            'question_id' => $question->id,
            'label' => 'Internet programming language',
            'value' => 'q1-a3',
            'is_correct' => false,
        ]);
    }
}
