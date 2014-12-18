<?php namespace Mascame\ArtificerWidgets\DateTimepicker;

use Mascame\Artificer\Widgets\AbstractWidget;

class DateTimepicker extends AbstractWidget {

	public function output()
	{
		?>
		<link rel="stylesheet" href="<?= $this->package_assets ?>/datetimepicker/css/bootstrap-datetimepicker.min.css">

		<!-- Needed moment.js lib -->
		<script src="<?= $this->package_assets ?>/libs/js/moment-with-locales.min.js"></script>

		<script src="<?= $this->package_assets ?>/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

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