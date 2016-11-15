<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MembershipOriginTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $table = 'membership_origins';

	    $data = [
		    [
			    'slug' => Str::slug('Actif'),
			    'name' => 'Actif',
			    'description' => 'Actif nokia'
		    ],
		    [
			    'slug' => Str::slug('Conjoint Actif'),
			    'name' => 'Conjoint Actif',
			    'description' => 'Conjoint d\'actif nokia'
		    ],
		    [
			    'slug' => Str::slug('Enfant Actif'),
			    'name' => 'Enfant Actif',
			    'description' => 'Enfant d\'actif nokia'
		    ],
		    [
			    'slug' => Str::slug('Préretraite'),
			    'name' => 'Préretraite',
			    'description' => 'Préretraite nokia/alcatel'
		    ],
		    [
			    'slug' => Str::slug('Conjoint Préretraite'),
			    'name' => 'Conjoint Préretraite',
			    'description' => 'Conjoint de préretraite nokia/alcatel'
		    ],
		    [
			    'slug' => Str::slug('Enfant Préretraite'),
			    'name' => 'Enfant Préretraite',
			    'description' => 'Enfant de préretraite nokia/alcatel'
		    ],
		    [
			    'slug' => Str::slug('Entreprise Partenaire CE'),
			    'name' => 'Entreprise Partenaire CE',
			    'description' => 'Entreprise partenaire CE nokia'
		    ],
		    [
			    'slug' => Str::slug('Extérieur'),
			    'name' => 'Extérieur',
			    'description' => 'Personne extérieur a nokia'
		    ]

	    ];

	    DB::table($table)->delete();
	    DB::table($table)->insert($data);
    }
}
