<?php

use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data ke tabel pegawai
        DB::table('detail_profile')->insert([
            'address' => 'jember',
            'nomor_tlp' => '083119471529',
            'ttl'=> '2000-12-06',
            'foto'=>'picture.png'
        ]);
    }
}
