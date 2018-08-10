<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ToursTableSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
        $this->call(BookingsTableSeeder::class);
        $this->call(RatingsTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(LikesTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(SocialAccountsTableSeeder::class);
    }
}
