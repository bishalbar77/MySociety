<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();
        $adminRole = Role::where('name', 'admin')->first();
        $managerRole = Role::where('name', 'manager')->first();

        $admin = User::create([
            'name' => 'Super',
            'email' => 'super@admin.com',
            'phone' => '7485962587',
            'ltname' => 'Admin',
            'district' => 'Sundergarh',
            'country' => 'India',
            'dob' => '2000-07-01',
            'state' => 'Odisha',
            'city' => 'BBSR',
            'pincode' => '769004',
            'add' => 'DL/4, Civil Township',
            'password' => Hash::make('admin')
        ]);
        $manager = User::create([
            'name' => 'Man',
            'email' => 'Man@admin.com',
            'phone' => '4672976761',
            'ltname' => 'Admin',
            'district' => 'Sundergarh',
            'country' => 'India',
            'dob' => '2000-07-01',
            'state' => 'Odisha',
            'city' => 'BBSR',
            'pincode' => '769004',
            'add' => 'DL/4, Civil Township',
            'password' => Hash::make('admin')
        ]);
        $user = User::create([
            'name' => 'Kane',
            'email' => 'Kane@hotmail.com',
            'phone' => '7485976761',
            'ltname' => 'Admin',
            'district' => 'Sundergarh',
            'country' => 'India',
            'dob' => '2000-07-01',
            'state' => 'Odisha',
            'city' => 'BBSR',
            'pincode' => '769004',
            'add' => 'DL/4, Civil Township',
            'password' => Hash::make('admin')
        ]);
        $admin->roles()->attach($adminRole);
        $manager->roles()->attach($managerRole);
        $user->roles()->attach($managerRole);
    }
}
