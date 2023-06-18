<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'Ietaupīt naudu',
            'description' => 'Cik naudu varam ietaupīt pērkot papīru Centrāltirgū?',
            'duedate' => '2022-06-30',
            'priority' => 'Augsta',
            'status' => 'Gaida iesniegumu',
            'tags' => 'Finanses',
        ]);

        Task::create([
            'title' => 'Dzimšanas diena',
            'description' => 'Jānim tuvojas dzimšanas diena. Nepieciešamas idejas dāvanai. Izdomāt vismaz divas!',
            'duedate' => '2022-07-10',
            'priority' => 'Zema',
            'status' => 'Gaida iesniegumu',
            'tags' => 'Kolektīvs',
        ]);
    }
}
