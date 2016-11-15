<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InsuranceLabelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $table = 'insurance_labels';

	    $data = [
		    [
			    'slug' => Str::slug('Loisir 1'),
			    'name' => 'Loisir 1',
			    'description' => 'Loisir 1'
		    ],
		    [
			    'slug' => Str::slug('Loisir 1 Top'),
			    'name' => 'Loisir 1 Top',
			    'description' => 'Loisir 1 Top'
		    ],
		    [
			    'slug' => Str::slug('Loisir 2'),
			    'name' => 'Loisir 2',
			    'description' => 'Loisir 2'
		    ],
		    [
			    'slug' => Str::slug('Loisir 2 Top'),
			    'name' => 'Loisir 2 Top',
			    'description' => 'Loisir 2 Top'
		    ],
		    [
			    'slug' => Str::slug('Loisir 3'),
			    'name' => 'Loisir 3',
			    'description' => 'Loisir 3'
		    ],
		    [
			    'slug' => Str::slug('Loisir 3 Top'),
			    'name' => 'Loisir 3 Top',
			    'description' => 'Loisir 3 Top'
		    ],
	    ];

	    DB::table($table)->delete();
	    DB::table($table)->insert($data);
    }
}
