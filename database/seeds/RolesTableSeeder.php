<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $table = 'roles';

	    $data = [
		    [
			    'slug' => Str::slug('Administrator'),
			    'name' => 'Administrateur',
			    'description' => 'Administrateur du site'
		    ],
		    [
			    'slug' => Str::slug('Secretary'),
			    'name' => 'Secrétaire',
			    'description' => 'Secrétaire de l\'association'
		    ],
		    [
			    'slug' => Str::slug('Member'),
			    'name' => 'Membre',
			    'description' => 'Membre actif du club'
		    ]
	    ];

	    DB::table($table)->delete();
	    DB::table($table)->insert($data);
    }
}
