<?php namespace Mascame\ArtificerWidgets\DateTimepicker;

use Mascame\Artificer\Widgets\AbstractWidget;

class DateTimepicker extends AbstractWidget {

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