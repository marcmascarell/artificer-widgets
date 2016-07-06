<?php namespace Mascame\Artificer\Widget;

class DateTimepicker extends FieldWidget {

	public $version = '1.0';
	public $name = 'Datetime';
	public $description = 'Bootstrap Datepicker';
	public $author = 'Marc Mascarell';
	public $thumbnail = ''; // url

	public function getStyles() {
		return [
			'datetimepicker/css/bootstrap-datetimepicker.min.css'
		];
	}

	public function getScripts() {
		return [
			'libs/js/moment-with-locales.min.js',
			'datetimepicker/js/bootstrap-datetimepicker.min.js',
		];
	}

	public function output()
	{
		?>
		<link rel="stylesheet" href="<?= self::$assetsPath ?>/datetimepicker/css/bootstrap-datetimepicker.min.css">

		<!-- Needed moment.js lib -->
		<script src="<?= self::$assetsPath ?>/libs/js/moment-with-locales.min.js"></script>

		<script src="<?= self::$assetsPath ?>/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

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