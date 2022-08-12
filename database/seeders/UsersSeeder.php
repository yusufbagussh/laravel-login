<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Yusuf Bagus Sungging Herlambang',
            'username' => 'yusufbagussh',
            'email' => 'yusuf.herlambang@gmail.com',
            'password' => bcrypt('yusuf57552'),
            'role' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Dhimas Risang Maulana',
            'username' => 'dhimasrisang',
            'email' => 'dhimas.risang@gmail.com',
            'password' => bcrypt('dhimas57552'),
            'role' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Rizki Alfian',
            'username' => 'rizkialfian',
            'email' => 'rizki.alfian@gmail.com',
            'password' => bcrypt('rizki57552'),
            'role' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
