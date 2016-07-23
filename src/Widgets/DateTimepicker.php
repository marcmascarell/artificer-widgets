<?php namespace Mascame\Artificer\Widgets;

use Mascame\Artificer\Fields\FieldWrapper;
use Mascame\Artificer\Widget\FieldWidget;

class DateTimepicker extends FieldWidget {

	public $name = 'Datetime';
	public $description = 'Bootstrap Datepicker';
	public $thumbnail = ''; // url

	public function assets() {
		return [
			'bootstrap-datetimepicker.min.css',
			'libs/moment-with-locales.min.js',
			'bootstrap-datetimepicker.min.js',
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