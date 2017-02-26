<?php

namespace Mascame\Artificer;

class ArtificerWidgetsServiceProvider extends ArtificerExtensionServiceProvider
{
    protected $package = 'mascame/artificer-widgets';

    public function register()
    {
        \App::singleton(Widgets\DateTimepicker::class);
        \App::singleton(Widgets\CKeditor::class);
        \App::singleton(Widgets\Select2::class);
        \App::singleton(Widgets\Icheck::class);

        $this->addWidget([
            Widgets\DateTimepicker::class,
            Widgets\CKeditor::class,
            Widgets\Select2::class,
            Widgets\Icheck::class,
//            Widgets\Datepicker::class,
//            Widgets\FocalPoint::class,
        ]);
    }
}
