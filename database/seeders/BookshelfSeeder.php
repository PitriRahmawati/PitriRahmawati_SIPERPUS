<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("bookshelves")->insert([
            [
            'code'=>'RAK0A',
            'name'=>'manga',
            ],
            [
            'code'=>'rakld3s',
            'name'=>'jjj',
            ],
            [
            'code'=>'dfh6s',
            'name'=>'aaaj', 
            ],
        ]);
        
    }
}
