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
            'title' => 'My Personal blog',
            'content' => 'Here is the content of my Personal blog',
            'author' => 'Ulises Yerandis',
        ]);

        Blog::create([
            'title' => 'Blog',
            'content' => 'In this blog i write about my last year',
            'author' => 'Jeidy Ramirez ',
        ]);

        Blog::create([
            'title' => 'My blog',
            'content' => 'Here is the content of my  blog',
            'author' => ' Yerandis',
        ]);

        Blog::create([
            'title' => 'Hello',
            'content' => 'In this blog i write about my weekend',
            'author' => 'Jeidy Ramirez ',
        ]);

        Blog::create([
            'title' => 'My life',
            'content' => 'Here is the content of my first blog',
            'author' => 'Ulises Yerandis',
        ]);

        Blog::create([
            'title' => 'The school',
            'content' => 'In this blog i write about my weekend i the school',
            'author' => 'Jeidy Ramirez ',
        ]);
    }
}
