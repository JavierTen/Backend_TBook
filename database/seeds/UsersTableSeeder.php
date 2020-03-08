<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->where('id',22)->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 22,
                'name' => 'Robert E. Brock',
                'email' => 'driver@demo.com',
                'password' => '$2y$10$T/jwzYDJfC8c9CdD5PbpuOKvEXlpv4.RR1jMT0PgIMT.fzeGw67JO',
                'api_token' => 'OuMsmU903WMcMhzAbuSFtxBekZVdXz66afifRo3YRCINi38jkXJ8rpN0FcfS',
                'remember_token' => NULL,
                'created_at' => '2019-12-15 18:49:44',
                'updated_at' => '2019-12-16 22:01:21',
                'braintree_id' => NULL,
                'paypal_email' => NULL,
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
                'device_token' => 'eRN8OcCW_Zg:APA91bECHClevd8nrH4rf71DzhV7NQz-QzFBjZpdkZRqhTuYBbmcMi3puU5abCwa34Z2sr1HuJYMgglS_ZO7repodrQUrDICAitH3bjJ_uVy_3qEjtu_xajBHuzbt0Lg7THt-xY47t5d',
            ),
        ));
        
        
    }
}