<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $teachers = [
            ['teacher_id'=>1,'teacher_name'=>'John Doe'],
            ['teacher_id'=>2,'teacher_name'=>'Smith James'],
            ['teacher_id'=>3,'teacher_name'=>'Kate Lily'],
            ['teacher_id'=>4,'teacher_name'=>'Mike Conley'],
            ['teacher_id'=>5,'teacher_name'=>'Denis Ritchie'],
            ['teacher_id'=>6,'teacher_name'=>'Jimmy Buttler'],
         ];
        DB::table('teachers')->insert($teachers);
    }   
}
