<?php

use Illuminate\Database\Seeder;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        factory(App\noticia::class, 10)
            ->create();
    }
}
