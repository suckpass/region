<?php
namespace App\MainApp\database\seeds;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder {

    // City Indonesian Seeder
    public function run()
    {
        // truncate table cities
        DB::table('cities')->truncate();

        $province = 
        [
            [ // 1
                'province_id' => 1,
                'name' => 'Kab. Simeulue',
                'created_at' => now(),
            ],
            [ // 2
                'province_id' => 1,
                'name' => 'Kab. Aceh Singkil',
                'created_at' => now(),
            ],
            [ // 3
                'province_id' => 1,
                'name' => 'Kab. Aceh Selatan',
                'created_at' => now(),
            ],
            [ // 4
                'province_id' => 1,
                'name' => 'Kab. Aceh Tenggara',
                'created_at' => now(),
            ],
            [ // 5
                'province_id' => 1,
                'name' => 'Kab. Aceh Timur',
                'created_at' => now(),
            ],
            [ // 6
                'province_id' => 1,
                'name' => 'Kab. Aceh Tengah',
                'created_at' => now(),
            ],
            [ // 7
                'province_id' => 1,
                'name' => 'Kab. Aceh Barat',
                'created_at' => now(),
            ],
            [ // 8
                'province_id' => 1,
                'name' => 'Kab. Aceh Besar',
                'created_at' => now(),
            ],
            [ // 9
                'province_id' => 1,
                'name' => 'Kab. Pidie',
                'created_at' => now(),
            ],
            [ // 10
                'province_id' => 1,
                'name' => 'Kab. Bireuen',
                'created_at' => now(),
            ],
            [ // 11
                'province_id' => 1,
                'name' => 'Kab. Aceh Utara',
                'created_at' => now(),
            ],
            [ // 12
                'province_id' => 1,
                'name' => 'Kab. Aceh Barat Daya',
                'created_at' => now(),
            ],
            [ // 13
                'province_id' => 1,
                'name' => 'Kab. Gayo Lues',
                'created_at' => now(),
            ],
            [ // 14
                'province_id' => 1,
                'name' => 'Kab. Aceh Tamiang',
                'created_at' => now(),
            ],
            [ // 15
                'province_id' => 1,
                'name' => 'Kab. Nagan Raya',
                'created_at' => now(),
            ],
            [ // 16
                'province_id' => 1,
                'name' => 'Kab. Aceh Jaya',
                'created_at' => now(),
            ],
            [ // 17
                'province_id' => 1,
                'name' => 'Kab. Bener Meriah',
                'created_at' => now(),
            ],
            [ // 18
                'province_id' => 1,
                'name' => 'Kab. Pidie Jaya',
                'created_at' => now(),
            ],
            [ // 19
                'province_id' => 1,
                'name' => 'Kota Banda Aceh',
                'created_at' => now(),
            ],
            [ // 20
                'province_id' => 1,
                'name' => 'Kota Sabang',
                'created_at' => now(),
            ],
            [ // 21
                'province_id' => 1,
                'name' => 'Kota Langsa',
                'created_at' => now(),
            ],
            [ // 22
                'province_id' => 1,
                'name' => 'Kota Lhokseumawe',
                'created_at' => now(),
            ],
            [ // 23
                'province_id' => 1,
                'name' => 'Kota Subulussalam',
                'created_at' => now(),
            ],

            [ // 24
                'province_id' => 2,
                'name' => 'Kab. Nias',
                'created_at' => now(),
            ],
            [ // 25
                'province_id' => 2,
                'name' => 'Kab. Mandailing Natal',
                'created_at' => now(),
            ],
            [ // 26
                'province_id' => 2,
                'name' => 'Kab. Tapanuli Selatan',
                'created_at' => now(),
            ],
            [ // 27
                'province_id' => 2,
                'name' => 'Kab. Tapanuli Tengah',
                'created_at' => now(),
            ],
            [ // 28
                'province_id' => 2,
                'name' => 'Kab. Tapanuli Utara',
                'created_at' => now(),
            ],
            [ // 29
                'province_id' => 2,
                'name' => 'Kab. Toba Samosir',
                'created_at' => now(),
            ],
            [ // 30
                'province_id' => 2,
                'name' => 'Kab. Labuhan Batu',
                'created_at' => now(),
            ],
            [ // 26
                'province_id' => 2,
                'name' => 'Kab. Tapanuli Selatan',
                'created_at' => now(),
            ],
            [ // 26
                'province_id' => 2,
                'name' => 'Kab. Tapanuli Selatan',
                'created_at' => now(),
            ],
            [ // 26
                'province_id' => 2,
                'name' => 'Kab. Tapanuli Selatan',
                'created_at' => now(),
            ],
            [ // 26
                'province_id' => 2,
                'name' => 'Kab. Tapanuli Selatan',
                'created_at' => now(),
            ],
            [ // 26
                'province_id' => 2,
                'name' => 'Kab. Tapanuli Selatan',
                'created_at' => now(),
            ],
            [ // 26
                'province_id' => 2,
                'name' => 'Kab. Tapanuli Selatan',
                'created_at' => now(),
            ],
        ];

        DB::table('cities')->insert($province);

    }

}