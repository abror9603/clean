<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create( [
            'title' => 'Qiziqarli xabar',
            'short_content' => 'Eng yuqori darajadagi malakali mutaxasisslar xizmati!',
            'content' => 'Biz sizga arzon va sifatli tozalash xizmatini taklif etamiz. Biz bilan har qanday tartibsizliklar va zararli bakteryalar daf etiladi!',
            'photo' => '...'
        ]);

        Post::create( [
            'title' => 'Qiziqarli fakt',
            'short_content' => 'Eng yuqori darajadagi malakali mutaxasisslar xizmati!',
            'content' => 'Biz sizga arzon va sifatli tozalash xizmatini taklif etamiz. Biz bilan har qanday tartibsizliklar va zararli bakteryalar daf etiladi!',
            'photo' => '...'
        ]);

        Post::create( [
            'title' => 'Qiziqarli manba',
            'short_content' => 'Eng yuqori darajadagi malakali mutaxasisslar xizmati!',
            'content' => 'Biz sizga arzon va sifatli tozalash xizmatini taklif etamiz. Biz bilan har qanday tartibsizliklar va zararli bakteryalar daf etiladi!',
            'photo' => '...'
        ]);

        Post::create( [
            'title' => 'Qiziqarli yanglik',
            'short_content' => 'Eng yuqori darajadagi malakali mutaxasisslar xizmati!',
            'content' => 'Biz sizga arzon va sifatli tozalash xizmatini taklif etamiz. Biz bilan har qanday tartibsizliklar va zararli bakteryalar daf etiladi!',
            'photo' => '...'
        ]);
    }
}
