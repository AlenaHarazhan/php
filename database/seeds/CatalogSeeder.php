<?php

use Illuminate\Database\Seeder;
use App\Catalog;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Catalog::create([
            'name'=>'Персонажи',
            'parent_id'=> 0
        ]);
        Catalog::create([
            'name'=>'Иллюстрации',
            'parent_id'=> 11
        ]);

    }
}
