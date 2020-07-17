<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'author_id' => '1',
            'title' => 'Test',
            'body' => 'This is the testing body.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
