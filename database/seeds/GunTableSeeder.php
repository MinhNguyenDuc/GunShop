<?php

use Illuminate\Database\Seeder;

class GunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('guns')->truncate();
        \Illuminate\Support\Facades\DB::table('guns')->insert([
            [
                'name' => 'SKS',
                'image'=>'https://s7d2.scene7.com/is/image/CabelasCA/144489-206064?wid=460&hei=460',
                'videoId'=> '7XpqcjBuYic',
                'categoryId'=> 5,
                'ammo'=> 7.62,
                'magazine_capability'=> 10,
                'range'=>800,
                'bullet_speed'=>800,
                'fire_rate'=> 0.09,
                'description'=> '7mm',
                'detail'=>'high recoil',
                'price'=>3600,
            ],
            [
                'name' => 'AKM',
                'image'=>'https://www.legionusa.com/images/magictoolbox_cache/80543c918ed05ba09145ba56f4b3651f/1/2/1228/original/1928856838/IMG_9009web.jpg',
                'videoId'=> '0Lnx-YIjRUA',
                'categoryId'=> 4,
                'ammo'=> 7.62,
                'magazine_capability'=> 30,
                'range'=>400,
                'bullet_speed'=>715,
                'fire_rate'=> 0.1,
                'description'=> '7mm',
                'detail'=>'high recoil',
                'price'=>2700,
            ],
            [
                'name' => 'AWM',
                'image'=>'https://cdn.shopify.com/s/files/1/1980/1771/files/Camo_AWM_Goatgun.jpg?7882738145036354673',
                'videoId'=> '4nLBwd1xPrU',
                'categoryId'=> 5,
                'ammo'=> 0.300,
                'magazine_capability'=> 7,
                'range'=>1000,
                'bullet_speed'=>910,
                'fire_rate'=> 1.850,
                'description'=> '1 shot 1 kill',
                'detail'=>'Best sniper',
                'price'=>4750,
            ]
        ]);
    }
}
