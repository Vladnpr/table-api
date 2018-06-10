<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'post_name' => 'Make some laravel api',
                'post_description' => 'Реализовать API для доступа к данным из таблицы (только SELECT). 
                                        В проекте должен быть один интерфейс, который из ссылки вида https://hostname.com/tableName получает параметром имя таблицы “tableName”.'
            ],
            [
                'post_name' => 'THE ELDER SCROLLS ONLINE: SUMMERSET REVIEW: DON\'T LEAVE THIS ELF ON THE SHELF',
                'post_description' => 'I’m stepping through a portal on the heels of a young elf woman who looks roughly my own age, or at least as close as you get when you’re dealing with a race that thinks of our pitiful lifespan like we think of dog years. And it’s your normal, everyday magical portal—no big deal, right? But on the other side of the portal I face a woman racked with the lines and worries of a wasted life. I hear her despair at seeing my relatively young face. And yes, it’s her: The trip through the portal felt like seconds for me, but she’s been over here on the other side, trapped and wandering in the lovely ruin we’d come to study for more decades than I’ve even been alive.

Elder Scrolls Online’s Summerset expansion ($40 on Humble) is at its finest in quests like these; these little moments that feel more like “weird tales” from the pens of pulp greats like Robert E. Howard or H.P. Lovecraft than the pages of contemporary doorstop fantasies. The compact scripts allow glimpses into the daily life of imaginary worlds that you just don’t get in the greater dramas about wrestling with gods and saving the world.

Unlike say, Final Fantasy XIV, ESO keeps its cutscenes limited to flashy introductory sequences for new expansions, so most of the deep emotion in these quests gets catered out within the confines of the rigid animations of an MMO, but even so the tales manage to chill me through the mere contemplation of them.'
            ],
        ];

        \Illuminate\Support\Facades\DB::table('posts')->insert($data);
    }
}
