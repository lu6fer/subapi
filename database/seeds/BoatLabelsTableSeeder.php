<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BoatLabelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = 'boat_labels';

	    $data = [
	    	[
	    		'slug' => Str::slug('Carte Mer'),
			    'name' => 'Carte Mer',
			    'description' => 'Navigation de jour, 5milles max, 50cv max'
		    ],
		    [
			    'slug' => Str::slug('Permis Mer'),
			    'name' => 'Permis Mer',
			    'description' => ''
		    ],
		    [
			    'slug' => Str::slug('Permis Mer A'),
			    'name' => 'Permis Mer A',
			    'description' => 'Navigation jour/nuit, 6milles max, sans limite de puissance'
		    ],
		    [
			    'slug' => Str::slug('Permis Mer B'),
			    'name' => 'Permis Mer B',
			    'description' => 'Navigation jour/nuit, sans limite de distance, sans limite de puissance'
		    ],
		    [
			    'slug' => Str::slug('Permis Mer C'),
			    'name' => 'Permis Mer C',
			    'description' => 'Navigation jour/nuit, sans limite de distance, sans limite de puissance'
		    ],
		    [
			    'slug' => Str::slug('Permis Côtier'),
			    'name' => 'Permis Côtier',
			    'description' => 'Navigation jour/nuit, 5milles max, sans limite de puissance'
		    ],
		    [
			    'slug' => Str::slug('Permis Semi-hauturier'),
			    'name' => 'Permis Semi-hauturier',
			    'description' => ''
		    ],
		    [
			    'slug' => Str::slug('Permis Hauturier'),
			    'name' => 'Permis Hauturier',
			    'description' => 'Navigation jour/nuit, sans limite de distance, sans limite de puissance'
		    ],
		    [
			    'slug' => Str::slug('Capitaine 200'),
			    'name' => 'Capitaine 200',
			    'description' => 'Navigation commerce/plaisance professionel'
		    ]

	    ];

	    DB::table($table)->delete();
	    DB::table($table)->insert($data);
    }
}
