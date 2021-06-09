<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new User();
        $user->name='phamdao';
        $user->email='phamdao@gmail.com';
        $user->password=Hash::make('1234');
        $user->save();

        $user=new User();
        $user->name='daopham';
        $user->email='phamdao1411@gmail.com';
        $user->password=Hash::make('123456');
        $user->save();
    }
}
