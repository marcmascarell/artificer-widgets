<?php namespace Mascame\Artificer\Widget;

// This widget requires a column on database like "sort_id" to work

class FocalPoint extends AbstractWidget {

	public function output()
	{
		?>
		<!--		<link rel="stylesheet" href="--><? //= self::$assetsPath ?><!--/widgets/image-focal-point/style.css">-->
		<!--		<script src="--><? //= self::$assetsPath ?><!--/widgets/image-focal-point/jquery.focalpoint.js"></script>-->
	<?php
	}

}