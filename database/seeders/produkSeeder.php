<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class produkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produk= new Produk();
        $produk->name = 'Slingbag';
        $produk->deskripsi = 'Eius non minus autem soluta ut ui labore omnis quisquam corrupti autem odit voluptas quos commodi magnam occaecati.';
        $produk->save();

        $produk= new Produk();
        $produk->name = 'STas Minggat';
        $produk->deskripsi = 'Eius non minus autem soluta ut ui labore omnis quisquam corrupti autem odit voluptas quos commodi magnam occaecati.';
        $produk->save();
    }
}
