<?php

namespace App\Providers;
use App\Article;
use App\AsacLabel;
use App\BoatLabel;
use App\DiveLabel;
use App\Event;
use App\Observers\InsuranceLabelObserver;
use App\InsuranceLabel;
use App\InvoiceStatus;
use App\MembershipOrigin;
use App\Observers\ArticleObserver;
use App\Observers\AsacLabelObserver;
use App\Observers\BoatLabelObserver;
use App\Observers\DiveLabelObserver;
use App\Observers\EventObserver;
use App\Observers\InvoiceStatusObserver;
use App\Observers\MembershipOriginObserver;
use App\Observers\ProductObserver;
use App\Observers\SubscriptionStatusObserver;
use App\Product;
use App\SubscriptionStatus;
use App\User;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
	    AsacLabel::observe(AsacLabelObserver::class);
	    Article::observe(ArticleObserver::class);
	    BoatLabel::observe(BoatLabelObserver::class);
	    DiveLabel::observe(DiveLabelObserver::class);
	    Event::observe(EventObserver::class);
	    InvoiceStatus::observe(InvoiceStatusObserver::class);
	    InsuranceLabel::observe(InsuranceLabelObserver::class);
	    MembershipOrigin::observe(MembershipOriginObserver::class);
	    Product::observe(ProductObserver::class);
	    SubscriptionStatus::observe(SubscriptionStatusObserver::class);
        User::observe(UserObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
	public function register()
	{
		// register ide-helper on dev env
		if ($this->app->environment() !== 'production') {
			$this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
		}
		$this->app->singleton(\Faker\Generator::class, function () {
			return \Faker\Factory::create('fr_FR');
		});
	}
}
