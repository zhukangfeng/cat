<?php namespace Cat\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\View\Factory as ViewFactory;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot(ViewFactory $view)
	{
		//
		$view->composer('partials.forms.cat', 'Cat\Http\Views\Composers\CatFormComposer');
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'Cat\Services\Registrar'
		);
		if ($this->app->environment() == 'local') {
	        $this->app->register('Laracasts\Generators\GeneratorsServiceProvider');
	    }	
	}

}
