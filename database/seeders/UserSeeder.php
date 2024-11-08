<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $User=User::create([
            'name'=>'pustakawan A',
            'email'=>'Pustakawan@gmail.com',
            'password'=>Hash::make('123456'),
        ]);
        $User->assignRole('pustakawan');
        $User->givePermissionTo('kelola_buku');
        $User=User::create([
            'name'=>'pustakawan B',
            'email'=>'PustakawanB@gmail.com',
            'password'=>Hash::make('123456'),
        ]);
        $User->assignRole('member');
        $User->givePermissionTo('lihat_buku');

    }
}
