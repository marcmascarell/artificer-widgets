<?php namespace Mascame\ArtificerWidgets\FocalPoint;

use Mascame\Artificer\Widgets\AbstractWidget;

// This widget requires a column on database like "sort_id" to work

class FocalPoint extends AbstractWidget {

	public function output()
	{
		?>
		<!--		<link rel="stylesheet" href="--><? //= self::$package_assets ?><!--/widgets/image-focal-point/style.css">-->
		<!--		<script src="--><? //= self::$package_assets ?><!--/widgets/image-focal-point/jquery.focalpoint.js"></script>-->
	<?php
	}

}