<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MypostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([[
            'nama' => 'Basket Ball',
            'harga' => 10,
            'foto' => 'basketball.png'
        ],
        [
            'nama' => 'T- Shirt',
            'harga' => 20,
            'foto' => 't-shirt.png'
        ],
        [
            'nama' => 'Game',
            'harga' => 30,
            'foto' => 'game.png'
        ],[
            'nama' => 'Basket Ball v2',
            'harga' => 40,
            'foto' => 'basketball.png'
        ],
        [
            'nama' => 'T- Shirt v2',
            'harga' => 50,
            'foto' => 't-shirt.png'
        ],
        [
            'nama' => 'Game v2',
            'harga' => 60,
            'foto' => 'game.png'
        ]
    ]);
    }
}
