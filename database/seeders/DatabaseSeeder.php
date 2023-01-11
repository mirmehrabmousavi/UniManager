<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Major;
use App\Models\Section;
use App\Models\User;
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
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
                'admin' => 1
            ], [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('123456'),
                'admin' => 0
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        $majors = [
            [
                'name' => 'کامپیوتر'
            ], [
                'name' => 'برق'
            ], [
                'name' => 'علوم سیاسی'
            ]
        ];

        foreach ($majors as $major) {
            Major::create($major);
        }

        $sections = [
            [
                'name' => 'فوق دیپلم'
            ], [
                'name' => 'لیسانس'
            ], [
                'name' => 'فوق لیسانس'
            ]
        ];

        foreach ($sections as $section) {
            Section::create($section);
        }
    }
}
