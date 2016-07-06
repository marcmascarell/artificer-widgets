<?php namespace Mascame\Artificer;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Mascame\Artificer\Widget;

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
		App::singleton(Widget\Chosen::class, function()
		{
			return new Widget\Chosen();
		});

		App::singleton(Widget\CKeditor::class, function()
		{
			return new Widget\CKeditor();
		});

		App::singleton(Widget\Datepicker::class, function()
		{
			return new Widget\Datepicker();
		});

		App::singleton(Widget\DateTimepicker::class, function()
		{
			return new Widget\DateTimepicker();
		});

		Artificer::widgetManager()->add('widget-datetime', function() {
			return app(Widget\DateTimepicker::class);
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
