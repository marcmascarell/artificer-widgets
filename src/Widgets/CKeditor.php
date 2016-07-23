<?php namespace Mascame\Artificer\Widgets;

namespace Mascame\Artificer\Widgets;

use Mascame\Artificer\Fields\FieldWrapper;
use Mascame\Artificer\Widget\FieldWidget;

class CKeditor extends FieldWidget {

	public function output()
	{
		?>
		<script src="//cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
		<script>
			$(function () {
			});
		</script>
	<?php
	}

}