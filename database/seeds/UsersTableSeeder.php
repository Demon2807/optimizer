<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        try{
            $firstUser = User::firstOrNew(['email' => 'devignatov@gmail.com'], [
                'password' => bcrypt('secret'),
                'name' => 'George Ignatoff'
            ]);
            $firstUser->save();
            $secondUser = User::firstOrNew([
                'email' => 'mrmeyerson@gmail.com',
            ],[
                'name' => 'Mark Mayerson',
                'password' => bcrypt('secret')
            ]);
            $secondUser->save();
            $firstUser->assignRole('admin');
            $secondUser->assignRole('admin');
        }catch(Illuminate\Database\QueryException $e){
            return false;
        }
    }
}
