<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Sedan',
                'description' => 'Mobil dengan 4 pintu dan kapasitas penumpang hingga 5 orang. Cocok untuk perjalanan sehari-hari atau perjalanan bisnis.',
            ],
            [
                'name' => 'Hatchback',
                'description' => 'Mobil dengan pintu belakang yang dapat dibuka sebagai akses ke bagasi. Biasanya memiliki ukuran yang lebih kompak dan ekonomis dalam penggunaan bahan bakar.',
            ],
            [
                'name' => 'SUV (Sport Utility Vehicle)',
                'description' => 'Mobil yang dirancang untuk penggunaan di berbagai kondisi jalan, termasuk jalan perkotaan, jalan bebas hambatan, dan medan off-road. Memiliki kapasitas penumpang yang lebih besar dan ruang kargo yang luas.',
            ],
            [
                'name' => 'MPV (Multi-Purpose Vehicle)',
                'description' => 'Mobil keluarga yang dapat menampung lebih banyak penumpang dengan konfigurasi tempat duduk fleksibel. Biasanya memiliki beberapa baris kursi yang dapat dilipat untuk memberikan fleksibilitas ruang.',
            ],
            [
                'name' => 'Minivan',
                'description' => 'Mobil yang lebih besar daripada MPV dengan ruang kargo yang lebih luas. Cocok untuk perjalanan keluarga atau perjalanan rombongan.',
            ],
            [
                'name' => 'Sportscar',
                'description' => 'Mobil yang dirancang untuk kecepatan dan performa. Biasanya memiliki desain yang aerodinamis dan mesin yang bertenaga tinggi.',
            ],
            [
                'name' => 'Convertible',
                'description' => 'Mobil dengan atap yang dapat dilipat atau dihilangkan sepenuhnya, memberikan pengalaman berkendara terbuka dan gaya yang khas.',
            ],
            [
                'name' => '4x4',
                'description' => 'Mobil dengan kemampuan penggerak keempat pada semua roda, cocok untuk menjelajahi medan off-road yang menantang.',
            ],
            [
                'name' => 'Mobil Listrik',
                'description' => 'Mobil yang menggunakan tenaga listrik sebagai sumber daya utamanya. Ramah lingkungan dan memiliki efisiensi energi yang tinggi.',
            ],
            [
                'name' => 'Mobil Mewah',
                'description' => 'Mobil dengan fitur-fitur dan kenyamanan kelas atas, seperti bahan-bahan berkualitas tinggi, sistem hiburan yang canggih, dan performa yang luar biasa.',
            ],
        ];
        

        Category::insert($data);
    }
}
