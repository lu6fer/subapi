<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $table = 'groups';

	    $data = [
		    [
			    'slug' => Str::slug('Bureau'),
			    'name' => 'Bureau',
			    'description' => 'Bureau du club'
		    ],
		    [
			    'slug' => Str::slug('Comité directeur'),
			    'name' => 'Comité directeur',
			    'description' => 'Comité directeur du club'
		    ],
		    [
			    'slug' => Str::slug('Moniteurs'),
			    'name' => 'Moniteurs',
			    'description' => 'Moniteur E1 à E4'
		    ],
		    [
			    'slug' => Str::slug('Directeur de plongée'),
			    'name' => 'Directeurs de plongée',
			    'description' => 'Directeurs de plongée technique'
		    ],
		    [
			    'slug' => Str::slug('Autonomes'),
			    'name' => 'Autonomes',
			    'description' => 'Plongeurs autonomes'
		    ],
		    [
			    'slug' => Str::slug('Péparants niveau 3 / 4'),
			    'name' => 'Péparants niveau 3 / 4',
			    'description' => 'Péparants niveau 3 / 4'
		    ],
		    [
			    'slug' => Str::slug('Péparants niveau 2'),
			    'name' => 'Péparants niveau 2',
			    'description' => 'Péparants niveau 2'
		    ],
		    [
			    'slug' => Str::slug('Péparants niveau 1'),
			    'name' => 'Péparants niveau 1',
			    'description' => 'Péparants niveau 1'
		    ],
		    [
			    'slug' => Str::slug('Autorisé à plongée'),
			    'name' => 'Autorisé à plongée',
			    'description' => 'Utilisateur autorisé à plongée'
		    ],
		    [
			    'slug' => Str::slug('Certificat éxpiré'),
			    'name' => 'Certificat éxpiré',
			    'description' => 'Liste des utilisateur dont le certificat expire dans moins d\'un mois ou a expiré'
		    ]
	    ];

	    DB::table($table)->delete();
	    DB::table($table)->insert($data);
    }
}
