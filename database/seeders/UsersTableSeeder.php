<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'over_name' => '内田',
        'under_name' => '理沙',
        'over_name_kana' => 'ウチダ',
        'under_name_kana' => 'リサ',
        'mail_address' => 'risauchida@example.com',
        'sex' => '2',
        'birth_day' => '1996-01-01',
        'role' => '4',
        'password' => Hash::make('012345678'),
    ]);
    }
}
