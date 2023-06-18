<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class serviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $service = new Service();
        $service->icon = 'fa-solid fa-mountain-city';
        $service->title = 'Tas Berkualitas';
        $service->deskripsi = 'Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.';
        $service->save();

        $service = new Service();
        $service->icon = 'fa-solid fa-arrow-up-from-ground-water';
        $service->title = 'Harga Bersaing';
        $service->deskripsi = 'Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.';
        $service->save();

        $service = new Service();
        $service->icon = 'fa-solid fa-compass-drafting';
        $service->title = 'Jahitan Rapi';
        $service->deskripsi = 'Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.';
        $service->save();

        $service = new Service();
        $service->icon = 'fa-solid fa-trowel-bricks';
        $service->title = 'Quality Control';
        $service->deskripsi = 'Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.';
        $service->save();
    }
}
