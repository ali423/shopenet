<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role=Role::query()->where('title','admin')->firstOrFail();
        User::query()
            ->create([
                'role_id'=>$admin_role->id,
                'name'=>'علی',
                'email'=>'info@shopenet.ir',
                'mobile'=>'09386365817',
                'password'=>bcrypt('a13760406'),
            ]);
    }
}
