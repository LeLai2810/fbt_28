<?php

use Illuminate\Database\Seeder;

class SocialAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\SocialAccount::class, 10)->create();
    }
}
