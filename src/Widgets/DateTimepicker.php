<?php namespace Mascame\Artificer\Widgets;

use Mascame\Artificer\Assets\AssetsManagerInterface;
use Mascame\Artificer\Extension\ResourceCollector;
use Mascame\Artificer\Fields\FieldWrapper;
use Mascame\Artificer\Widget\FieldWidget;

class DateTimepicker extends FieldWidget {

	public $name = 'Datetime Picker';

	public $description = 'Bootstrap Datepicker';

	public $slug = 'datetimepicker';

    public $thumbnail = ''; // url

    /**
     * @param AssetsManagerInterface $manager
     */
	public function assets(AssetsManagerInterface $manager) {
		$manager->add([
			'jquery-cdn',
            'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment-with-locales.min.js',
            $this->getAssetsPath('css/bootstrap-datetimepicker.min.css'),
            $this->getAssetsPath('js/bootstrap-datetimepicker.min.js'),
            $this->getAssetsPath('js/datetime-widget.js'),
		]);
	}

    /**
     * Extension config is not available until boot
     *
     * @param ResourceCollector $collector
     * @return ResourceCollector
     */
    public function resources(ResourceCollector $collector) {
        $collector->publishes([__DIR__.'/../../resources/datetimepicker' => $this->getAssetsPath()]);

        return $collector;
    }

    /**
     * @param FieldWrapper $field
     * @return FieldWrapper
     */
	public function field(FieldWrapper $field) {
        $field->addAttribute('class', 'datetimepicker');
        $field->addAttribute('data-date-format', 'YYYY-MM-DD HH:mm:ss');

		return $field;
	}

}
