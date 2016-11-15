<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubscriptionStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $table = 'subscription_statuses';

	    $data = [
		    [
			    'slug' => Str::slug('In progress'),
			    'name' => 'In Progress',
			    'description' => 'Facture encours en attente du payement'
		    ],
		    [
			    'slug' => Str::slug('Completed'),
			    'name' => 'Completed',
			    'description' => 'Facture payée'
		    ],
		    [
			    'slug' => Str::slug('Expired'),
			    'name' => 'Expired',
			    'description' => 'L\'adhésion est arrivée a expiration'
		    ]
	    ];

	    DB::table($table)->delete();
	    DB::table($table)->insert($data);
    }
}
