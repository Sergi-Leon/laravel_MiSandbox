<?php

namespace Database\Seeders;
use App\Models\Comic;

use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comic::factory(100) -> create();
    }
}
