<?php

namespace Database\Seeders;

use App\Http\Controllers\BankController;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    public function run(): void
    {
        $ctrl = new BankController();
        $data = [
            [
                'name' => 'ธนาคารกรุงเทพ',
                'code' => 'BBL',
                'img' => 'bbl.webp',
                'color' => '#0078D4',
            ],
            [
                'name' => 'ธนาคารกสิกรไทย',
                'code' => 'KBANK',
                'img' => 'kbank.webp',
                'color' => '#1DAA56',
            ],
            [
                'name' => 'ธนาคารกรุงไทย',
                'code' => 'KTB',
                'img' => 'ktb.webp',
                'color' => '#19A6E4',
            ],
            [
                'name' => 'ธนาคารทหารไทยธนชาติ',
                'code' => 'TTB',
                'img' => 'ttb.webp',
                'color' => '#F68E29',
            ],
            [
                'name' => 'ธนาคารไทยพาณิชย์',
                'code' => 'SCB',
                'img' => 'scb.webp',
                'color' => '#543185',
            ],
            [
                'name' => 'ธนาคารกรุงศรีอยุธยา',
                'code' => 'BAY',
                'img' => 'bay.webp',
                'color' => '#746466',
            ],
            [
                'name' => 'ธนาคารเกียรตินาคินภัทร',
                'code' => 'KKP',
                'img' => 'kkp.webp',
                'color' => '#67649B',
            ],
            [
                'name' => 'ธนาคารซีไอเอ็มบีไทย',
                'code' => 'CIMB',
                'img' => 'cimb.webp',
                'color' => '#780109',
            ],
            [
                'name' => 'ธนาคารยูโอบี',
                'code' => 'UOB',
                'img' => 'uob.webp',
                'color' => '#142A6C',
            ],
            [
                'name' => 'ธนาคารแลนด์ แอนด์ เฮ้าส์',
                'code' => 'LAH',
                'img' => 'lah.webp',
                'color' => '#727375',
            ],
            [
                'name' => 'ธนาคารออมสิน',
                'code' => 'GSB',
                'img' => 'gsb.webp',
                'color' => '#EC188F',
            ],
        ];

        foreach ($data as $item) {
            $ctrl->create($item);
        }
    }
}
