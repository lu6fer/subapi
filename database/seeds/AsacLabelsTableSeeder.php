<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AsacLabelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $table = 'asac_labels';

	    $data = [
		    [
			    'slug' => Str::slug('Subalcatel'),
			    'name' => 'Subalcatel',
			    'description' => 'Subalcatel'
		    ],
		    [
			    'slug' => Str::slug('Foot'),
			    'name' => 'Foot',
			    'description' => 'Foot'
		    ],
		    [
			    'slug' => Str::slug('PSMA'),
			    'name' => 'PSMA',
			    'description' => 'PSMA'
		    ],
		    [
			    'slug' => Str::slug('Golf'),
			    'name' => 'Golf',
			    'description' => 'Golf'
		    ],
		    [
			    'slug' => Str::slug('Gym'),
			    'name' => 'Gym',
			    'description' => 'Gym'
		    ],
		    [
			    'slug' => Str::slug('Tennis'),
			    'name' => 'Tennis',
			    'description' => 'Tennis'
		    ],
		    [
			    'slug' => Str::slug('Voile'),
			    'name' => 'Voile',
			    'description' => 'Voile'
		    ],
		    [
			    'slug' => Str::slug('Volley'),
			    'name' => 'Volley',
			    'description' => 'Volley'
		    ],
	    ];

	    DB::table($table)->delete();
	    DB::table($table)->insert($data);
    }
}
