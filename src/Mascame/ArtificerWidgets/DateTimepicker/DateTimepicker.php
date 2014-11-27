<?php namespace Mascame\ArtificerWidgets\DateTimepicker;

use Mascame\Artificer\Widgets\AbstractWidget;

class DateTimepicker extends AbstractWidget {

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