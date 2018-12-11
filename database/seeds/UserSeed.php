<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$qqI9OZStySjpJQR4fBDuvOvT.1zjlOHdrECZNK1fdoHVcdv.Z2Ztq', 'remember_token' => '', 'approved' => 1, 'team_id' => null,],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
