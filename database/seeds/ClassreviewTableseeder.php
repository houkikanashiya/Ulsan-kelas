<?php

use Illuminate\Database\Seeder;

class ClassreviewTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  $user = DB::table('users')->first(); 
       for($i = 1; $i <= 100; $i++) {
            DB::table('classreviews')->insert([
                'user_id' => $user->id. $i,
                'lecturer' => 'test lecturer ' . $i,
                'class_name' => 'test class name ' . $i,
                'rank' => '' . $i,
                'presentation' => '' . $i,
                'test_review' => 'test test ' . $i,
                'class_review' => 'test class ' . $i
            ]);
            
            
        }
    }
}
