<?php namespace Mascame\Artificer;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Mascame\Artificer\Widgets;

class ArtificerWidgetsServiceProvider extends ServiceProvider {

	use AutoPublishable;

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	protected $name = 'artificer-widgets';

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
			__DIR__.'/../resources/' => public_path('packages/mascame/' . $this->name),
		], 'public');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		App::singleton(Widgets\Chosen::class, function()
		{
			return new Widgets\Chosen();
		});


		App::singleton(Widgets\Datepicker::class, function()
		{
			return new Widgets\Datepicker();
		});

        App::singleton(Widgets\CKeditor::class);
        App::singleton(Widgets\DateTimepicker::class);

		Artificer::widgetManager()->add('mascame/artificer-widgets', [
            Widgets\DateTimepicker::class,
            Widgets\CKeditor::class
        ]);
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
