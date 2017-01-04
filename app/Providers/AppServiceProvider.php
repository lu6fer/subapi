<?php

namespace App\Providers;
use App\Article;
use App\AsacLabel;
use App\BoatLabel;
use App\DiveLabel;
use App\Event;
use App\Group;
use App\Observers\GroupObserver;
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
use App\Observers\RoleObserver;
use App\Observers\SubscriptionObserver;
use App\Observers\SubscriptionStatusObserver;
use App\Product;
use App\Role;
use App\Subscription;
use App\SubscriptionStatus;
use App\User;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
	    /*
	     * Model observers
	     */
	    Article::observe(ArticleObserver::class);
	    AsacLabel::observe(AsacLabelObserver::class);
	    BoatLabel::observe(BoatLabelObserver::class);
	    DiveLabel::observe(DiveLabelObserver::class);
	    Event::observe(EventObserver::class);
	    Group::observe(GroupObserver::class);
	    InvoiceStatus::observe(InvoiceStatusObserver::class);
	    InsuranceLabel::observe(InsuranceLabelObserver::class);
	    MembershipOrigin::observe(MembershipOriginObserver::class);
	    Product::observe(ProductObserver::class);
	    Role::observe(RoleObserver::class);
	    SubscriptionStatus::observe(SubscriptionStatusObserver::class);
	    Subscription::observe(SubscriptionObserver::class);
        User::observe(UserObserver::class);
	    /*
	     * Custom validators
	     */
	    Validator::extend('text', function ($attribute, $value) {

		    // This will only accept alpha, numeric, spaces, _ and -
		    return preg_match('/^[\pL\pN\s_-]+$/u', $value);

	    });

	    Validator::extend('address', function ($attribute, $value) {

		    // This will only accept alpha, numeric, spaces, _, -, ', ), (, and ,
		    return preg_match('/^[-_\',)(\pL\pN\s\.]+$/u', $value);

	    });
	    Validator::extend('licence', function ($attribute, $value) {

		    // This will only accept alpha, numeric, / and -
		    return preg_match('/^[-\/\pN\pL]+$/u', $value);

	    });
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
