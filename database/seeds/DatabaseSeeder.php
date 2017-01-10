<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $this->call(AsacLabelsTableSeeder::class);
	    $this->call(BoatLabelsTableSeeder::class);
	    $this->call(DiveLabelsTableSeeder::class);
	    $this->call(InvoiceStatusesTableSeeder::class);
	    $this->call(MembershipOriginTableSeeder::class);
	    $this->call(SubscriptionStatusesTableSeeder::class);
	    $this->call(InsuranceLabelsTableSeeder::class);
	    $this->call(GroupsTableSeeder::class);
	    $this->call(RolesTableSeeder::class);
            // $this->call(UsersTableSeeder::class);
    }
}
