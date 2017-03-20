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
    	// array para probar que nos generan los tokens
        $users = [
        	[
        		'name' => 'Luis juarez',
        		'email' => 'tresdosasd@gmail.com',
        		'password' => Hash::make('masterhack123'),
                'estado' => '1',
                'idtipo' => '2'
        	]
        ];

        // realizamos un recorrido en el array
        foreach ($users as $user) {
        	\App\User::create($user);
        }
    }
}
