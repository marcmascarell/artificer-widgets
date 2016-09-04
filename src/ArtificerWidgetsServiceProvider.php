<?php namespace Mascame\Artificer;

use Mascame\Artificer\Widgets;

class ArtificerWidgetsServiceProvider extends ArtificerExtensionServiceProvider {

	use AutoPublishable;

	protected $package = 'mascame/artificer-widgets';

	public function register()
	{
//		App::singleton(Widgets\Chosen::class);
//		App::singleton(Widgets\Datepicker::class);

        \App::singleton(Widgets\CKeditor::class);
        \App::singleton(Widgets\DateTimepicker::class);

		$this->addWidget([
            Widgets\DateTimepicker::class,
            Widgets\CKeditor::class,
//            Widgets\Datepicker::class,
//            Widgets\FocalPoint::class,
//            Widgets\Chosen::class,
        ]);
	}

}
