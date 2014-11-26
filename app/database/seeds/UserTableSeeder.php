<?php

class UserTableSeeder extends Seeder {

    public function run() {
        DB::table('users')->delete();
        User::create(
            array(
                'email' => 'mail@kilianhendrickx.be',
                'username' => 'kilian',
                'password' => Hash::make('wachtwoord'),
            )
        );
    }
}