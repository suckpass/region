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

        $city = 
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
            [ // 31
                'province_id' => 2,
                'name' => 'Kab. Asahan',
                'created_at' => now(),
            ],
            [ // 32
                'province_id' => 2,
                'name' => 'Kab. Simalungun',
                'created_at' => now(),
            ],
            [ // 33
                'province_id' => 2,
                'name' => 'Kab. Dairi',
                'created_at' => now(),
            ],
            [ // 34
                'province_id' => 2,
                'name' => 'Kab. Karo',
                'created_at' => now(),
            ],
            [ // 35
                'province_id' => 2,
                'name' => 'Kab. Deli Serdang',
                'created_at' => now(),
            ],
            [ // 36
                'province_id' => 2,
                'name' => 'Kab. Langkat',
                'created_at' => now(),
            ],
            [ // 37
                'province_id' => 2,
                'name' => 'Kab. Nias Selatan',
                'created_at' => now(),
            ],
            [ // 38
                'province_id' => 2,
                'name' => 'Kab. Humbang Hasundutan',
                'created_at' => now(),
            ],
            [ // 39
                'province_id' => 2,
                'name' => 'Kab. Pakpak Bharat',
                'created_at' => now(),
            ],
            [ // 40
                'province_id' => 2,
                'name' => 'Kab. Samosir',
                'created_at' => now(),
            ],
            [ // 41
                'province_id' => 2,
                'name' => 'Kab. Serdang Bedagai',
                'created_at' => now(),
            ],
            [ // 42
                'province_id' => 2,
                'name' => 'Kab. Batu Bara',
                'created_at' => now(),
            ],
            [ // 43
                'province_id' => 2,
                'name' => 'Kab. Padang Lawas Utara',
                'created_at' => now(),
            ],
            [ // 44
                'province_id' => 2,
                'name' => 'Kab. Padang Lawas',
                'created_at' => now(),
            ],
            [ // 45
                'province_id' => 2,
                'name' => 'Kab. Labuhan Batu Selatan',
                'created_at' => now(),
            ],
            [ // 46
                'province_id' => 2,
                'name' => 'Kab. Labuhan Batu Utara',
                'created_at' => now(),
            ],
            [ // 47
                'province_id' => 2,
                'name' => 'Kab. Nias Utara',
                'created_at' => now(),
            ],
            [ // 48
                'province_id' => 2,
                'name' => 'Kab. Nias Barat',
                'created_at' => now(),
            ],
            [ // 49
                'province_id' => 2,
                'name' => 'Kota Sibolga',
                'created_at' => now(),
            ],
            [ // 50
                'province_id' => 2,
                'name' => 'Kota Tanjung Balai',
                'created_at' => now(),
            ],
            [ // 51
                'province_id' => 2,
                'name' => 'Kota Pematang Siantar',
                'created_at' => now(),
            ],
            [ // 52
                'province_id' => 2,
                'name' => 'Kota Tebing Tinggi',
                'created_at' => now(),
            ],
            [ // 53
                'province_id' => 2,
                'name' => 'Kota Medan',
                'created_at' => now(),
            ],
            [ // 54
                'province_id' => 2,
                'name' => 'Kota Binjai',
                'created_at' => now(),
            ],
            [ // 55
                'province_id' => 2,
                'name' => 'Kota Padangsidimpuan',
                'created_at' => now(),
            ],
            [ // 56
                'province_id' => 2,
                'name' => 'Kota Gunungsitoli',
                'created_at' => now(),
            ],
            
            [ // 57
                'province_id' => 3,
                'name' => 'Kab. Kepulauan Mentawai',
                'created_at' => now(),
            ],
            [ // 58
                'province_id' => 3,
                'name' => 'Kab. Pesisir Selatan',
                'created_at' => now(),
            ],
            [ // 59
                'province_id' => 3,
                'name' => 'Kab. Solok',
                'created_at' => now(),
            ],
            [ // 60
                'province_id' => 3,
                'name' => 'Kab. Sijunjung',
                'created_at' => now(),
            ],
            [ // 61
                'province_id' => 3,
                'name' => 'Kab. Tanah Datar',
                'created_at' => now(),
            ],
            [ // 62
                'province_id' => 3,
                'name' => 'Kab. Padang Pariaman',
                'created_at' => now(),
            ],
            [ // 63
                'province_id' => 3,
                'name' => 'Kab. Agam',
                'created_at' => now(),
            ],
            [ // 64
                'province_id' => 3,
                'name' => 'Kab. Lima Puluh Kota',
                'created_at' => now(),
            ],
            [ // 65
                'province_id' => 3,
                'name' => 'Kab. Pasaman',
                'created_at' => now(),
            ],
            [ // 66
                'province_id' => 3,
                'name' => 'Kab. Solok Selatan',
                'created_at' => now(),
            ],
            [ // 67
                'province_id' => 3,
                'name' => 'Kab. Dharmasraya',
                'created_at' => now(),
            ],
            [ // 68
                'province_id' => 3,
                'name' => 'Kab. Pasaman Barat',
                'created_at' => now(),
            ],
            [ // 69
                'province_id' => 3,
                'name' => 'Kota Padang',
                'created_at' => now(),
            ],
            [ // 70
                'province_id' => 3,
                'name' => 'Kota Solok',
                'created_at' => now(),
            ],
            [ // 71
                'province_id' => 3,
                'name' => 'Kota Sawah Lunto',
                'created_at' => now(),
            ],
            [ // 72
                'province_id' => 3,
                'name' => 'Kota Padang Panjang',
                'created_at' => now(),
            ],
            [ // 73
                'province_id' => 3,
                'name' => 'Kota Bukittinggi',
                'created_at' => now(),
            ],
            [ // 74
                'province_id' => 3,
                'name' => 'Kota Payakumbuh',
                'created_at' => now(),
            ],
            [ // 75
                'province_id' => 3,
                'name' => 'Kota Pariaman',
                'created_at' => now(),
            ],

            [ // 76
                'province_id' => 4,
                'name' => 'Kab. Kuantan Singingi',
                'created_at' => now(),
            ],
            [ // 77
                'province_id' => 4,
                'name' => 'Kab. Indragiri Hulu',
                'created_at' => now(),
            ],
            [ // 78
                'province_id' => 4,
                'name' => 'Kab. Indragiri Hilir',
                'created_at' => now(),
            ],
            [ // 79
                'province_id' => 4,
                'name' => 'Kab. Pelalawan',
                'created_at' => now(),
            ],
            [ // 80
                'province_id' => 4,
                'name' => 'Kab. Siak',
                'created_at' => now(),
            ],
            [ // 81
                'province_id' => 4,
                'name' => 'Kab. Kampar',
                'created_at' => now(),
            ],
            [ // 82
                'province_id' => 4,
                'name' => 'Kab. Rokan Hulu',
                'created_at' => now(),
            ],
            [ // 83
                'province_id' => 4,
                'name' => 'Kab. Bengkalis',
                'created_at' => now(),
            ],
            [ // 84
                'province_id' => 4,
                'name' => 'Kab. Rokan Hilir',
                'created_at' => now(),
            ],
            [ // 85
                'province_id' => 4,
                'name' => 'Kab. Kepulauan Meranti',
                'created_at' => now(),
            ],
            [ // 86
                'province_id' => 4,
                'name' => 'Kota Pekanbaru',
                'created_at' => now(),
            ],
            [ // 87
                'province_id' => 4,
                'name' => 'Kota Dumai',
                'created_at' => now(),
            ],

            [ // 88
                'province_id' => 5,
                'name' => 'Kab. Kerinci',
                'created_at' => now(),
            ],
            [ // 89
                'province_id' => 5,
                'name' => 'Kab. Merangin',
                'created_at' => now(),
            ],
            [ // 90
                'province_id' => 5,
                'name' => 'Kab. Sarolangun',
                'created_at' => now(),
            ],
            [ // 91
                'province_id' => 5,
                'name' => 'Kab. Batang Hari',
                'created_at' => now(),
            ],
            [ // 92
                'province_id' => 5,
                'name' => 'Kab. Muaro Jambi',
                'created_at' => now(),
            ],
            [ // 93
                'province_id' => 5,
                'name' => 'Kab. Tanjung Jabung Timur',
                'created_at' => now(),
            ],
            [ // 94
                'province_id' => 5,
                'name' => 'Kab. Tanjung Jabung Barat',
                'created_at' => now(),
            ],
            [ // 95
                'province_id' => 5,
                'name' => 'Kab. Tebo',
                'created_at' => now(),
            ],
            [ // 96
                'province_id' => 5,
                'name' => 'Kab. Bungo',
                'created_at' => now(),
            ],
            [ // 97
                'province_id' => 5,
                'name' => 'Kota Jambi',
                'created_at' => now(),
            ],
            [ // 98
                'province_id' => 5,
                'name' => 'Kota Sungai Penuh',
                'created_at' => now(),
            ],

            [ // 99
                'province_id' => 6,
                'name' => 'Kab. Ogan Komering Ulu',
                'created_at' => now(),
            ],
            [ // 100
                'province_id' => 6,
                'name' => 'Kab. Ogan Komering Ilir',
                'created_at' => now(),
            ],
        ];

        DB::table('cities')->insert($city);

    }

}