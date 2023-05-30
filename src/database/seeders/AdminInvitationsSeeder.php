<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminInvitationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('user_invitations')->insert([
            'user_id' => 1,
            'invited_at' => now()->addDay(),
            'activated_at' => now(),
            'token' => 'token',
        ]);
    }
}
