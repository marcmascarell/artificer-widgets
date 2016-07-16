<?php namespace Mascame\Artificer\Widgets;

class Chosen extends AbstractWidget {

	public function output()
	{
		?>
		<link rel="stylesheet" href="<?= self::$assetsPath ?>/chosen/custom.chosen.css">
		<script src="<?= self::$assetsPath ?>/chosen/chosen.jquery.js"></script>

		<script>
			$(function () {
				var $chosen = $("select:visible");

				function makeChosen(element) {
					element.chosen({width: "100%"})
				}

//				$("body").on('relationRefresh', function(event, data) {
//					makeChosen($('select[name="'+data.name+'"]'));
//				});

				makeChosen($chosen);
			});
		</script>
	<?php
	}

}