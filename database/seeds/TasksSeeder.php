<?php

use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
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
                'task_name' => 'Example Sentences for tasks',
                'task_description' => 'A regret for the mistakes of yesterday must not, however, blind us to the tasks of today.

The tasks we face are difficult, and we can accomplish them only if we work together.

No one spoke; the three workers kept at their tasks as if no other person had been in the room with them.

One after another the men came to report the completion of their tasks.

There he plied his tasks so diligently that he excelled all in book-learning.

I have therefore had to create for myself some tasks which will hold me to my chains.

How these expeditions accomplished their tasks shall be told later.

The overseers were brutal when the slaves did not do the tasks set for them.

These, also, make easier and bolder the electrician\'s tasks.

The daily tasks and pleasures were picked up where they had been dropped.'
            ]
        ];

        \Illuminate\Support\Facades\DB::table('tasks')->insert($data);
    }
}
