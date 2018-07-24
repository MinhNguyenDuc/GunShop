<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('categories')->truncate();
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            [
                'id'=>1,
                'name'=> 'Pistols',
                'description'=>'A pistol is a type of handgun.',
                'image'=>'https://www.sportsmansoutdoorsuperstore.com/prodimages/39260-DEFAULT-l.jpg'
            ],
            [
                'id'=>2,
                'name'=> 'Shotguns',
                'description'=>'A firearm that is usually designed to be fired from the shoulder, which uses the energy of a fixed shell to fire a number of small spherical pellets called shot, or a solid projectile called a slug.',
                'image'=>'https://www.fieldandstream.com/sites/fieldandstream.com/files/styles/2000_1x_/public/images/2017/10/shotgun-test-hero.jpg?itok=Uc6BrzEf&fc=50,50'
            ],
            [
                'id'=>3,
                'name'=> 'SMGs',
                'description'=>'A submachine gun (SMG) is a magazine-fed, automatic carbine designed to fire pistol cartridges. ',
                'image'=>'https://img00.deviantart.net/c944/i/2011/203/a/0/smgs_and_a_grenade_launcher_by_hoborginc-d41ayh9.jpg'
            ],
            [
                'id'=>4,
                'name'=> 'Assault Rifles',
                'description'=>'An assault rifle is a selective-fire rifle that uses an intermediate cartridge and a detachable magazine',
                'image'=>'http://www.thefirearms.guide/wp-content/uploads/assault-rifles-679x382.jpg'
            ],
            [
                'id'=>5,
                'name'=> 'Sniper Rifles',
                'description'=>'A sniper rifle is a high-precision rifle designed for sniper missions',
                'image'=>'https://steamuserimages-a.akamaihd.net/ugc/251462956266360765/7347385FF9B1B289478DEB6FA64D3A22E5BE58C6/'
            ]

        ]);
    }
}
