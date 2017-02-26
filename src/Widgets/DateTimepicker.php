<?php

namespace Mascame\Artificer\Widgets;

use Mascame\Artificer\Fields\Field;
use Mascame\Artificer\Widget\FieldWidget;
use Mascame\Artificer\Extension\ResourceCollector;
use Mascame\Artificer\Assets\AssetsManagerInterface;

class DateTimepicker extends FieldWidget
{
    public $name = 'Datetime Picker';

    public $description = 'Bootstrap Datepicker';

    public $slug = 'datetimepicker';

    public $thumbnail = ''; // url

    /**
     * @param AssetsManagerInterface $manager
     */
    public function assets(AssetsManagerInterface $manager)
    {
        $manager->add([
            'jquery-cdn',
            'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment-with-locales.min.js',
            $this->getAssetsPath('css/bootstrap-datetimepicker.min.css'),
            $this->getAssetsPath('js/bootstrap-datetimepicker.min.js'),
            $this->getAssetsPath('js/datetime-widget.js'),
        ]);
    }

    /**
     * Extension config is not available until boot.
     *
     * @param ResourceCollector $collector
     * @return ResourceCollector
     */
    public function resources(ResourceCollector $collector)
    {
        $collector->publishes([__DIR__.'/../../resources/datetimepicker' => $this->getAssetsPath()]);

        return $collector;
    }

    /**
     * @param Field $field
     * @return Field
     */
    public function field(Field $field)
    {
        $field->addAttribute('data-widget-datetimepicker', 'true');
        $field->addAttribute('data-date-format', 'YYYY-MM-DD HH:mm:ss');

        return $field;
    }
}
