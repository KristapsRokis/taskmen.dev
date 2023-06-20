<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Task;
use App\Models\User;
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
            'duedate' => '2023-06-30',
            'priority' => 'Augsta',
            'status' => 'Gaida iesniegumu',
            'tags' => 'Finanses',
        ]);

        Task::create([
            'title' => 'Dzimšanas diena',
            'description' => 'Jānim tuvojas dzimšanas diena. Nepieciešamas idejas dāvanai. Izdomāt vismaz divas!',
            'duedate' => '2023-07-10',
            'priority' => 'Augsta',
            'status' => 'Iesniegts',
            'tags' => 'Kolektīvs',
        ]);

        Task::create([
            'title' => 'aaa',
            'description' => 'aaaa',
            'duedate' => '2023-08-12',
            'priority' => 'Vidēja',
            'status' => 'Gaida iesniegumu',
            'tags' => 'Apkalpojošais personāls',
        ]);
        User::create([
        'name' => 'Kristaps Roķis',
        'email' => 'kristaps@gmail.com',
        'password' => '321321',
        'tags' => 'Kolektīvs',
        'admin' => 'yes'   
        ]);
    }
}
