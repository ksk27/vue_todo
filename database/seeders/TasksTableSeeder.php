<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=10; $i++)
        {
            $param =
            [
                'title'=>'title'.$i,
                'content'=>'content'.$i,
                'person_in_charge'=>'person_in_charge'.$i,
            ];
            
            DB::table('tasks')->insert($param);
        }
    }
}
