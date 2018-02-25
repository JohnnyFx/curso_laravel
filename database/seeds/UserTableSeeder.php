<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\CodeProject\Entities\Project::truncate();
        // $this->call(UsersTableSeeder::class);
        factory(\CodeProject\Entities\User::class,10)->create();
    }
}
