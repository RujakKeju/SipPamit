<?php

namespace Database\Seeders;

use App\Models\role;
use App\Models\User;
use App\Models\UserAccount;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Dian Lucky",
            'email' => "dianlucky69@gmail.com",
            'address' => "Jln Gang Mawar, Dsn Panggung, Ds. Panggung, Kecamatan Pelaihari, Kabupaten Tanah Laut, Kalimantan Selatan",
            'contact_phone' => "087863946025",
            'descript' => "Seorang peternak hama yang kompeten",
            'username' => "dianlucky13",
            'password' => bcrypt("danabelumturun"),
            'role' => "peternak"
        ]);

        User::create([
            'name' => "David Hadi",
            'email' => "davidhadi69@gmail.com",
            'address' => "Jln Gang Mawar, Dsn Panggung, Ds. Panggung, Kecamatan Pelaihari, Kabupaten Tanah Laut, Kalimantan Selatan",
            'contact_phone' => "087863946232",
            'descript' => "Seorang admin amanah",
            'username' => "david6969",
            'password' => bcrypt("amanahdikit"),
            'role' => "peternak"
        ]);



    }
}
