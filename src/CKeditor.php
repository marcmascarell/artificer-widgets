<?php namespace Mascame\Artificer\Widget;

class CKeditor extends AbstractWidget {

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