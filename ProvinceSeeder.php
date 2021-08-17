<?php
namespace App\MainApp\database\seeds;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder {

    // Province Indonesian Seeder
    public function run()
    {
        // truncate table province
        DB::table('provinces')->truncate();

        $province = 
        [
            [
                'name' => 'Aceh',
                'created_at' => now(),
            ],
            [
                'name' => 'Sumatera Utara',
                'created_at' => now()
            ],
            [
                'name' => 'Sumatera Barat',
                'created_at' => now()
            ],
            [
                'name' => 'Riau',
                'created_at' => now()
            ],
            [
                'name' => 'Jambi',
                'created_at' => now()
            ],
            [
                'name' => 'Sumatera Selatan',
                'created_at' => now()
            ],
            [
                'name' => 'Bengkulu',
                'created_at' => now()
            ],
            [
                'name' => 'Lampung',
                'created_at' => now()
            ],
            [
                'name' => 'Kepulauan Bangka Belitung',
                'created_at' => now()
            ],
            [
                'name' => 'Kepulauan Riau',
                'created_at' => now()
            ],
            [
                'name' => 'Dki Jakarta',
                'created_at' => now()
            ],
            [
                'name' => 'Jawa Barat',
                'created_at' => now()
            ],
            [
                'name' => 'Jawa Tengah',
                'created_at' => now()
            ],
            [
                'name' => 'Di Yogyakarta',
                'created_at' => now()
            ],
            [
                'name' => 'Jawa Timur',
                'created_at' => now()
            ],
            [
                'name' => 'Banten',
                'created_at' => now()
            ],
            [
                'name' => 'Bali',
                'created_at' => now()
            ],
            [
                'name' => 'Nusa Tenggara Barat',
                'created_at' => now()
            ],
            [
                'name' => 'Nusa Tenggara Timur',
                'created_at' => now()
            ],
            [
                'name' => 'Kalimantan Barat',
                'created_at' => now()
            ],
            [
                'name' => 'Kalimantan Tengah',
                'created_at' => now()
            ],
            [
                'name' => 'Kalimantan Selatan',
                'created_at' => now()
            ],
            [
                'name' => 'Kalimantan Timur',
                'created_at' => now()
            ],
            [
                'name' => 'Kalimantan Utara',
                'created_at' => now()
            ],
            [
                'name' => 'Sulawesi Utara',
                'created_at' => now()
            ],
            [
                'name' => 'Sulawesi Tengah',
                'created_at' => now()
            ],
            [
                'name' => 'Sulawesi Selatan',
                'created_at' => now()
            ],
            [
                'name' => 'Sulawesi Tenggara',
                'created_at' => now()
            ],
            [
                'name' => 'Gorontalo',
                'created_at' => now()
            ],
            [
                'name' => 'Sulawesi Barat',
                'created_at' => now()
            ],
            [
                'name' => 'Maluku',
                'created_at' => now()
            ],
            [
                'name' => 'Maluku Utara',
                'created_at' => now()
            ],
            [
                'name' => 'Papua Barat',
                'created_at' => now()
            ],
            [
                'name' => 'Papua',
                'created_at' => now()
            ],
        ];

        DB::table('provinces')->insert($province);

    }

}