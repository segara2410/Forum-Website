<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'user_id' => '1',
            'post_id' => '1',
            'description' => 'Test comment by Admin Admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('comments')->insert([
            'user_id' => '2',
            'post_id' => '1',
            'description' => 'Test comment User',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
