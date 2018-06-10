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
                'post_name' => 'Example Sentences for tasks',
                'post_description' => 'A regret for the mistakes of yesterday must not, however, blind us to the tasks of today.

The tasks we face are difficult, and we can accomplish them only if we work together.

No one spoke; the three workers kept at their tasks as if no other person had been in the room with them.

One after another the men came to report the completion of their tasks.

There he plied his tasks so diligently that he excelled all in book-learning.

I have therefore had to create for myself some tasks which will hold me to my chains.

How these expeditions accomplished their tasks shall be told later.

The overseers were brutal when the slaves did not do the tasks set for them.

These, also, make easier and bolder the electrician\'s tasks.

The daily tasks and pleasures were picked up where they had been dropped.'
            ],
            [
                'post_name' => 'THE ELDER SCROLLS ONLINE: SUMMERSET REVIEW: DON\'T LEAVE THIS ELF ON THE SHELF',
                'post_description' => 'I’m stepping through a portal on the heels of a young elf woman who looks roughly my own age, or at least as close as you get when you’re dealing with a race that thinks of our pitiful lifespan like we think of dog years. And it’s your normal, everyday magical portal—no big deal, right? But on the other side of the portal I face a woman racked with the lines and worries of a wasted life. I hear her despair at seeing my relatively young face. And yes, it’s her: The trip through the portal felt like seconds for me, but she’s been over here on the other side, trapped and wandering in the lovely ruin we’d come to study for more decades than I’ve even been alive.

Elder Scrolls Online’s Summerset expansion ($40 on Humble) is at its finest in quests like these; these little moments that feel more like “weird tales” from the pens of pulp greats like Robert E. Howard or H.P. Lovecraft than the pages of contemporary doorstop fantasies. The compact scripts allow glimpses into the daily life of imaginary worlds that you just don’t get in the greater dramas about wrestling with gods and saving the world.

Unlike say, Final Fantasy XIV, ESO keeps its cutscenes limited to flashy introductory sequences for new expansions, so most of the deep emotion in these quests gets catered out within the confines of the rigid animations of an MMO, but even so the tales manage to chill me through the mere contemplation of them.'
            ],
            [
                'post_name' => 'The president of the United States meeting North Korea\'s leader will be, diplomatically speaking, A Huge Deal.

',
                'post_description' => "It's complicated, but basically they are political opposites who see each other as an existential threat.

America is a wealthy capitalist democracy. North Korea is an impoverished one-party, totalitarian state, born of the chaos of World War Two which divided the Korean peninsula.

They fought a war in the 1950s, when the North invaded South Korea and the US moved in to back the South.

"
            ],
            [
                'post_name' => 'Priyanka Chopra sorry for Quantico Hindu plotline',
                'post_description' => 'A recent episode of the spy thriller showed the main character, played by Ms Chopra, thwarting a plot hatched by Hindus ahead of a summit on Kashmir.

Many Indian fans were outraged by the show\'s story and attacked her online.

Ms Chopra declared herself a "proud Indian" in a tweet and "extremely saddened" by any hurt caused by the show.'
            ],
        ];

        \Illuminate\Support\Facades\DB::table('posts')->insert($data);
    }
}
