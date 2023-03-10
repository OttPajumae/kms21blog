<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $articles = Article::factory(100)->make();
        foreach ($articles as $article){
            $article->user_id = $users->random()->id;
            $article->save();
        }
    }
}
