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
        $users = [
            [
                'name' => 'テスト1さん',
                'email' => 'test@test.jp',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => '12342dssss'
            ]
        ];
        foreach ($users as $user) {
            \Illuminate\Support\Facades\DB::table('user')->insert($user);
        }
    }
}
