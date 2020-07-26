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
        $user = \App\User::create([
            'first_name' => 'super',
            'last_name' => 'admin',
            'email' => 'admin@app.com',
            'password' => bcrypt('1191993'),
        ]);
        $user->attachRole('super_admin');
    }// end of run
}// end of seeder
