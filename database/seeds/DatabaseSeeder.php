<?php

use App\User;
use App\Offer;
use App\Category;
use App\Industry;
use App\Merchant;
use App\OfferType;
use App\Membership;
use App\AccountManager;
use App\FeedbackSurvey;
use App\FeedbackSurveyRecord;
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
        // factory(Membership::class, 2)->create();
        // factory(User::class, 50)->create();
        // factory(AccountManager::class, 10)->create();
        // factory(Industry::class, 10)->create();
        // factory(Merchant::class, 10)->create();
        // factory(Category::class, 10)->create();
        // factory(OfferType::class, 10)->create();
        // factory(Offer::class, 100)->create();
        // factory(FeedbackSurvey::class, 10)->create();
        factory(FeedbackSurveyRecord::class, 10)->create();
    }
}
