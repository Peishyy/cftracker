<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Patience',
            'last_name' => 'Mwangi',
            'mobile' => '07000000000',
            'username' => 'patience',
            'email' => 'patiencemwng@gmail.com',
            'password' => Hash::make('Patience.'),
            'status' => 'activated',
        ]);

        // Get the "Administrator" role
        $adminRole = Role::where('name', 'Administrator')->first();

        // Assign the role to the user
        $user = User::where('email', 'patiencemwng@gmail.com')->first();
        $user->assignRole($adminRole);
    }
}
