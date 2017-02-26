<?php

namespace Mascame\Artificer\Widgets;

use Mascame\Artificer\Fields\Field;
use Mascame\Artificer\Widget\FieldWidget;
use Mascame\Artificer\Extension\ResourceCollector;
use Mascame\Artificer\Assets\AssetsManagerInterface;

class Select2 extends FieldWidget
{
    public $name = 'Select2 widget';

    public $description = 'Select2 widget';

    public $slug = 'select2';

    public $thumbnail = ''; // url

    /**
     * @param AssetsManagerInterface $manager
     */
    public function assets(AssetsManagerInterface $manager)
    {
        $manager->add([
            'jquery-cdn',
            'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css',
            'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
            'https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.6/select2-bootstrap.min.css',
            $this->getAssetsPath('select2-widget.js'),
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
        $collector->publishes([__DIR__.'/../../resources/select2' => $this->getAssetsPath()]);

        return $collector;
    }

    /**
     * @param Field $field
     * @return Field
     */
    public function field(Field $field)
    {
        $field->addAttribute('data-widget-select2', 'true');

        return $field;
    }
}
