<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Lucas";
        $user->email = "lucas@ed.team";
        $user->password = bcrypt('secret');
        $user->save();

        factory(User::class,50)->create();
    }
}
