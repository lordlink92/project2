<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Pastel;

class PastelesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {Model::unguard();
        for ($i=0;$i<9;$i++){
            Pastel::create([
        	'titulo' 				=>	'receta'.$i,
        	'ingredientes'				=>	'ajo aceite sal',
        	'preparacion'			=>	'lalala'
             ]);
        }
    }
}
