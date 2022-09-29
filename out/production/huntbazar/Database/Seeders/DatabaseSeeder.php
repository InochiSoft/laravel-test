<?php

namespace Database\Seeders;

use App\Models\Designer;
use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'is_admin' => true,
            'password' => bcrypt('admin'),
        ]);
        Designer::create([
            'slug' => 'ACN',
            'name' => 'Acne Studios',
        ]);
        Designer::create([
            'slug' => 'BER',
            'name' => 'Berluti',
        ]);
        Designer::create([
            'slug' => 'CKL',
            'name' => 'Calvin Klein',
        ]);
        Designer::create([
            'slug' => 'DUN',
            'name' => 'Dunhill',
        ]);
        Designer::create([
            'slug' => 'EDU',
            'name' => 'Edun',
        ]);
        Designer::create([
            'slug' => 'FER',
            'name' => 'Ferrari',
        ]);
        Designer::create([
            'slug' => 'GUC',
            'name' => 'Gucci',
        ]);
    }
}
