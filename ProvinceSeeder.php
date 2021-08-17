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
            [ // 1
                'name' => 'Aceh',
                'created_at' => now(),
            ],
            [ // 2
                'name' => 'Sumatera Utara',
                'created_at' => now()
            ],
            [ // 3
                'name' => 'Sumatera Barat',
                'created_at' => now()
            ],
            [ // 4
                'name' => 'Riau',
                'created_at' => now()
            ],
            [ // 5
                'name' => 'Jambi',
                'created_at' => now()
            ],
            [ // 6
                'name' => 'Sumatera Selatan',
                'created_at' => now()
            ],
            [ // 7
                'name' => 'Bengkulu',
                'created_at' => now()
            ],
            [ // 8
                'name' => 'Lampung',
                'created_at' => now()
            ],
            [ // 9
                'name' => 'Kepulauan Bangka Belitung',
                'created_at' => now()
            ],
            [ // 10
                'name' => 'Kepulauan Riau',
                'created_at' => now()
            ],
            [ // 11
                'name' => 'Dki Jakarta',
                'created_at' => now()
            ],
            [ // 12
                'name' => 'Jawa Barat',
                'created_at' => now()
            ],
            [ // 13
                'name' => 'Jawa Tengah',
                'created_at' => now()
            ],
            [ // 14
                'name' => 'Di Yogyakarta',
                'created_at' => now()
            ],
            [ // 15
                'name' => 'Jawa Timur',
                'created_at' => now()
            ],
            [ // 16
                'name' => 'Banten',
                'created_at' => now()
            ],
            [ // 17
                'name' => 'Bali',
                'created_at' => now()
            ],
            [ // 18
                'name' => 'Nusa Tenggara Barat',
                'created_at' => now()
            ],
            [ // 19
                'name' => 'Nusa Tenggara Timur',
                'created_at' => now()
            ],
            [ // 20
                'name' => 'Kalimantan Barat',
                'created_at' => now()
            ],
            [ // 21
                'name' => 'Kalimantan Tengah',
                'created_at' => now()
            ],
            [ // 22
                'name' => 'Kalimantan Selatan',
                'created_at' => now()
            ],
            [ // 23
                'name' => 'Kalimantan Timur',
                'created_at' => now()
            ],
            [ // 24
                'name' => 'Kalimantan Utara',
                'created_at' => now()
            ],
            [ // 25
                'name' => 'Sulawesi Utara',
                'created_at' => now()
            ],
            [ // 26
                'name' => 'Sulawesi Tengah',
                'created_at' => now()
            ],
            [ // 27
                'name' => 'Sulawesi Selatan',
                'created_at' => now()
            ],
            [ // 28
                'name' => 'Sulawesi Tenggara',
                'created_at' => now()
            ],
            [ // 29
                'name' => 'Gorontalo',
                'created_at' => now()
            ],
            [ // 30
                'name' => 'Sulawesi Barat',
                'created_at' => now()
            ],
            [ // 31
                'name' => 'Maluku',
                'created_at' => now()
            ],
            [ // 32
                'name' => 'Maluku Utara',
                'created_at' => now()
            ],
            [ // 33
                'name' => 'Papua Barat',
                'created_at' => now()
            ],
            [ // 34
                'name' => 'Papua',
                'created_at' => now()
            ],
        ];

        DB::table('provinces')->insert($province);

    }

}