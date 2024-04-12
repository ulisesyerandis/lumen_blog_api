<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'title' => 'My first blog',
            'content' => 'Here is the content of my first blog',
            'author' => 'Ulises Yerandis',
        ]);

        Blog::create([
            'title' => 'Second blog',
            'content' => 'In this blog i write about my weekend',
            'author' => 'Jeidy Ramirez ',
        ]);
    }
}
