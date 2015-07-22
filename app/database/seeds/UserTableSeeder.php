// app/database/seeds/UserTableSeeder.php

<?php

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
      'name'     => 'Brandon Zeek',
      'username' => 'berzeek',
      'email'    => 'brandon.zeek1@gmail.com',
      'password' => Hash::make('password'),
    ));
}

}
