<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::create([
            'title'=>'Anuj',
        ])->create([
            'title'=>'Kshitij',
        ]);
    }
}
