<?php

use Illuminate\Database\Seeder;
use App\sysuser;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        sysuser::insert([
            'uname' => 'dani123',
            'namalengkap' => 'daniframdhana',
            'email' => 'daniframdhana40@gmail.com',
            'upass' => sha1('admin')
        ]);
    }
}
