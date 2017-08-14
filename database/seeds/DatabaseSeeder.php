<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question_types')->insert([
            'type' => 'Từ vựng',
            'description' => 'Câu hỏi từ vựng',
        ]);
        DB::table('question_types')->insert([
            'type' => 'Ngữ pháp',
            'description' => 'Câu hỏi ngữ pháp',
        ]);
        DB::table('admins')->insert([
            'full_name' => 'Admin',
            'email' => 'adminabc@gmail.com',
            'password' => bcrypt('12345678'),
            'active' => true,
            'avatar' => 'default.jpg',
        ]);
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'adminabc',
            'password' => bcrypt('12345678'),
            'point' => 0,
            'active' => true,
            'avatar' => 'admin.jpg',
            'is_admin' => true,
        ]);
    }
}
