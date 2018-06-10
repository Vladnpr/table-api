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
                'task_name' => 'Make some laravel api',
                'task_description' => 'Реализовать API для доступа к данным из таблицы (только SELECT). 
                                        В проекте должен быть один интерфейс, который из ссылки вида https://hostname.com/tableName получает параметром имя таблицы “tableName”.'
            ]
        ];

        \Illuminate\Support\Facades\DB::table('tasks')->insert($data);
    }
}
