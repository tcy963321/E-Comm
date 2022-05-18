<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("products")->insert
            ([[
            'name' => 'OPPO Find X5 mobile',
            'price' => '2000',
            'description' => '4K Ultra Night Video Powered by MariSilicon X, Hasselblad Camera for Mobile, Ultra HDR Video, 80W SUPERVOOCTM Flash Charge, Qualcomm® Snapdragon® 888, 1 Billion Colour Bionic Display',
            'category' => 'mobile',
            'gallery' => 'https://image.oppo.com/content/dam/oppo/common/mkt/specs/find-x5/findx5-v2.png',
        ],
            [
                'name' => 'Panasonic 40" G300 LED TV TH-40G300K TV',
                'price' => '1500',
                'description' => 'Media Player, HDMI * 3, Media Player',
                'category' => 'Tv',
                'gallery' => 'https://www.panasonic.com/content/dam/pim/my/en/TH/TH-40G/TH-40G300K/ast-818117.png',
            ],
            [
                'name' => 'R30E LED TV',
                'price' => '1200',
                'description' => 'See new detail with Clear Resolution Enhancer, Pure, natural sound with Clear Phase, USB media playback with wide format support',
                'category' => 'Tv',
                'gallery' => 'https://www.sony.com.my/image/b88d1f3d8ca6ea87c408dd7bc1e44217?fmt=png-alpha&wid=720',
            ],
            [
                'name' => 'Panasonic 234L 2-door Top Freezer Refrigerator NR-BL263VPMY',
                'price' => '1560',
                'description' => '234L (MS IEC 62552:2016), Capacity 45kg Weight, 600 x 611 x 1449mm Dimension',
                'category' => 'fridge',
                'gallery' => 'https://www.panasonic.com/content/dam/pim/my/en/NR/NR-BL2/NR-BL263VPMY/ast-1053562.png',
            ]]);
    }
}
