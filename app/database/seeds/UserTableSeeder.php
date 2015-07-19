// app/database/seeds/UserTableSeeder.php

<?php

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'user_id'     => '1',
        'username' => 'berzeek',
        'first_name'    => 'Brandon',
        'last_name'    => 'Zeek',
        'remember_token' => Hash::make('password'),
    ));
}

}
