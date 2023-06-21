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
            'duedate' => '2023-09-01',
            'priority' => 'Vidēja',
            'status' => 'Gaida iesniegumu',
            'tags' => 'Finanses'
        ]);

        Task::create([
            'title' => 'Atrast līdzekļus',
            'description' => 'Palielināt budžetu darbinieku labklājības izmaksām. Kafija patēriņš ir krietni audzis, sakarā ar darbinieku skaita palielināšanos. Nepieciešams iepirkt kafiju.',
            'duedate' => '2023-07-10',
            'priority' => 'Vidēja',
            'status' => 'Gaida iesniegumu',
            'tags' => 'Finanses'
        ]);

        Task::create([
            'title' => 'Dzimšanas diena',
            'description' => 'Jānim tuvojas dzimšanas diena. Nepieciešamas idejas dāvanai. Izdomāt vismaz divas!',
            'duedate' => '2023-07-24',
            'priority' => 'Zema',
            'status' => 'Gaida iesniegumu',
            'tags' => 'Kolektīvs'
        ]);

        Task::create([
            'title' => 'Ierasties uz sanāksmi',
            'description' => 'Sapulce 12.00. Kompānijas stratēģijas plāns 2023./2024.',
            'duedate' => '2023-07-10',
            'priority' => 'Augsta',
            'status' => 'Gaida iesniegumu',
            'tags' => 'Kolektīvs'
        ]);

        Task::create([
            'title' => 'Kafija',
            'description' => 'Mums beidzās kafija. Pasūtīt 10kg',
            'duedate' => '2023-08-10',
            'priority' => 'Vidēja',
            'status' => 'Gaida iesniegumu',
            'tags' => 'Apkalpojošais'
        ]);

        Task::create([
            'title' => 'Papīrs',
            'description' => 'Mums beidzās papīrs. Pasūtīt!',
            'duedate' => '2023-08-10',
            'priority' => 'Vidēja',
            'status' => 'Gaida iesniegumu',
            'tags' => 'Apkalpojošais'
        ]);

        Task::create([
            'title' => 'Sakārtot konferenču zāli',
            'description' => '12.00 notiek sanāksme, sakārtot zāli',
            'duedate' => '2023-07-10',
            'priority' => 'Augsta',
            'status' => 'Gaida iesniegumu',
            'tags' => 'Apkalpojošais'
        ]);

        User::create([
            'name' => 'Kristaps Roķis',
            'email' => 'kristaps@gmail.com',
            'password' => '321321',
            'tags' => 'Kolektīvs',
            'admin' => true   
        ]);

        User::create([
            'name' => 'Jānis Ozols',
            'email' => 'janis@epasts.com',
            'password' => '123123',
            'tags' => 'Finanses',
        ]);
    }
}

//php artisan migrate:fresh --seed
