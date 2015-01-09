<?php namespace DmitryMomot\LaravelSegmentioWrapper;

use Illuminate\Support\ServiceProvider;

class LaravelSegmentioWrapperServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('dmitrymomot/laravel-segmentio-wrapper');
		
        // Auto create app alias with boot method.
        $loader = AliasLoader::getInstance()->alias('Analytics', 'DmitryMomot\LaravelSegmentioWrapper\Facades\Analytics');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['segmentio_wrapper'] = $this->app->share(function($app)
        {
            return new Analytics;
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
