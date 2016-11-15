<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DiveLabelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $table = 'dive_labels';

	    $data = [
		    [
			    'slug' => Str::slug('P0'),
			    'name' => 'P0',
			    'description' => 'Plongeur encours de formation niveau 1'
		    ],
		    [
			    'slug' => Str::slug('P1'),
			    'name' => 'P1',
			    'description' => 'Plongeur encadré jusqu\'a 20m'
		    ],
		    [
			    'slug' => Str::slug('P2'),
			    'name' => 'P2',
			    'description' => 'Plongeur autonome jusqu\'a 20m et encadré jusqu\'a 40m'
		    ],
		    [
			    'slug' => Str::slug('P2/E1'),
			    'name' => 'P2/E1',
			    'description' => 'Plongeur autonome jusqu\'a 20m, encadré jusqu\'a 40m et enseignement jusqu\'a 6m'
		    ],
		    [
			    'slug' => Str::slug('P3'),
			    'name' => 'P3',
			    'description' => 'Plongeur autonome jusqu\'a 60m'
		    ],
		    [
			    'slug' => Str::slug('P3/E1'),
			    'name' => 'P3/E1',
			    'description' => 'Plongeur autonome jusqu\'a 60m et enseignement jusqu\'a 6m'
		    ],
		    [
			    'slug' => Str::slug('P4'),
			    'name' => 'P4',
			    'description' => 'Guide de palanquée'
		    ],
		    [
			    'slug' => Str::slug('P4/E2'),
			    'name' => 'P4/E2',
			    'description' => 'Guide de palanquée et enseignement jusqu\'a 20m'
		    ],
		    [
			    'slug' => Str::slug('E3'),
			    'name' => 'E3',
			    'description' => 'Moniteur de plongée'
		    ],
		    [
			    'slug' => Str::slug('E4'),
			    'name' => 'E4',
			    'description' => 'Moniteur référent de plongée'
		    ]
	    ];

	    DB::table($table)->delete();
	    DB::table($table)->insert($data);
    }
}
