<?php namespace Mascame\Artificer\Widgets;

use Mascame\Artificer\Fields\FieldWrapper;
use Mascame\Artificer\Widget\FieldWidget;

class DateTimepicker extends FieldWidget {

	public $name = 'Datetime Picker';
	public $description = 'Bootstrap Datepicker';
	public $thumbnail = ''; // url
	public $slug = 'datetimepicker';

	public function assets() {
		return [
            'libs/js/moment-with-locales.min.js',
            $this->slug . '/css/bootstrap-datetimepicker.min.css',
            $this->slug . '/js/bootstrap-datetimepicker.min.js',
		];
	}

	public function field(FieldWrapper $field) {
			
	}
	
	public function output()
	{
		?>
		<script>
			$(function () {
				$('.datetimepicker').datetimepicker({
					pick12HourFormat: false,
					language: 'es'
				});
			});
		</script>
	<?php
	}

}