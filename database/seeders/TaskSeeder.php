<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'tarefa de teste',
            'due_date' => '2023-01-02 00:00:00',
            'description' => 'teste de descricao',
            'user_id' => 1,
            'category_id' => 1
        ]);
    }
}
