<?php namespace Mascame\ArtificerWidgets;

use Illuminate\Support\ServiceProvider;
use App;
use Mascame\Artificer\Widgets\AbstractWidget;
use Mascame\ArtificerWidgets\Chosen\Chosen;
use Mascame\ArtificerWidgets\CKeditor\CKeditor;
use Mascame\ArtificerWidgets\Datepicker\Datepicker;
use Mascame\ArtificerWidgets\DateTimepicker\DateTimepicker;

class ArtificerWidgetsServiceProvider extends ServiceProvider {

	protected $name = 'artificer-widgets';

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
        App::singleton('artificer-chosen-widget', function()
		{
			return new Chosen();
		});

		App::singleton('artificer-ckeditor-widget', function()
		{
			return new CKeditor();
		});

		App::singleton('artificer-datepicker-widget', function()
		{
			return new Datepicker();
		});

		App::singleton('artificer-datetimepicker-widget', function()
		{
			return new DateTimepicker();
		});

        $this->publishes([
            __DIR__.'/../public' => public_path(AbstractWidget::$package_assets),
        ], 'public');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{

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
