<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
  

    // For Update 1.6

    public function run()
    {
        
        $this->call(UsersTableSeeder::class);
        $this->call(DriverRestaurantsTableSeeder::class);
        $this->call(DeliveryAddressesTableSeeder::class);
        
        $this->call(RolesTableSeeder::class);
        $this->call(DemoPemissionsPermissionsTableSeeder::class);
        $this->call(ModelHasPermissionsTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
    }
}
