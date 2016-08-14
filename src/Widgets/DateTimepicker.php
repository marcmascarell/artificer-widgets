<?php namespace Mascame\Artificer\Widgets;

use Mascame\Artificer\Fields\FieldWrapper;
use Mascame\Artificer\Widget\FieldWidget;
use Stolz\Assets\Manager;

class DateTimepicker extends FieldWidget {

	public $name = 'Datetime Picker';

	public $description = 'Bootstrap Datepicker';

	public $slug = 'datetimepicker';

    public $thumbnail = ''; // url

    /**
     * @param Manager $manager
     */
	public function assets(Manager $manager) {
		$manager->add([
			'jquery-cdn',
			$this->assetsPath . 'libs/js/moment-with-locales.min.js',
			$this->assetsPath . $this->slug . '/css/bootstrap-datetimepicker.min.css',
			$this->assetsPath . $this->slug . '/js/bootstrap-datetimepicker.min.js',
			$this->assetsPath . $this->slug . '/js/datetime-widget.js',
		]);
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
