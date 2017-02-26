<?php namespace Mascame\Artificer\Widgets;

use Mascame\Artificer\Assets\AssetsManagerInterface;
use Mascame\Artificer\Extension\ResourceCollector;
use Mascame\Artificer\Fields\Field;
use Mascame\Artificer\Widget\FieldWidget;

class Icheck extends FieldWidget  {

	public $name = 'iCheck widget';

	public $description = 'iCheck widget';

	public $slug = 'icheck';

	public $thumbnail = ''; // url

	/**
	 * @param AssetsManagerInterface $manager
	 */
	public function assets(AssetsManagerInterface $manager) {
		$manager->add([
			'jquery-cdn',
			'https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/blue.css',
			'https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js',
            $this->getAssetsPath('icheck-widget.js'),
		]);
	}

	/**
	 * Extension config is not available until boot
	 *
	 * @param ResourceCollector $collector
	 * @return ResourceCollector
	 */
	public function resources(ResourceCollector $collector) {
		$collector->publishes([__DIR__.'/../../resources/icheck' => $this->getAssetsPath()]);

		return $collector;
	}

	/**
	 * @param Field $field
	 * @return Field
	 */
	public function field(Field $field) {
		$field->addAttribute('data-widget-icheck', "true");

		return $field;
	}

}