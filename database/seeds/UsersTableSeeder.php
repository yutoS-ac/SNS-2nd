<?php

use Illuminate\Database\Seeder;
use App\Models\Users\User;

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
            'over_name'=>'test',
            'under_name'=>'一郎',
            'over_name_kana'=>'テスト',
            'under_name_kana'=>'イチロウ',
            'mail_address'=>'test_ichiro@gmail.com',
            'sex'=>'男性',
            'birth_day'=>'20221226',
            'role'=>'講師(国語)',
            'password'=>Hash::make('password'),
            ]);
    }
}