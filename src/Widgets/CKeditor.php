<?php namespace Mascame\Artificer\Widgets;

namespace Mascame\Artificer\Widgets;

use Mascame\Artificer\Assets\AssetsManagerInterface;
use Mascame\Artificer\Extension\ResourceCollector;
use Mascame\Artificer\Fields\FieldWrapper;
use Mascame\Artificer\Widget\FieldWidget;

class CKeditor extends FieldWidget {

	public $name = 'CKEditor';

	public $description = 'CKEditor widget';

	public $slug = 'ckeditor';

	public $thumbnail = ''; // url

	/**
	 * @param AssetsManagerInterface $manager
	 */
	public function assets(AssetsManagerInterface $manager) {
		$manager->add([
			'//cdn.ckeditor.com/4.5.10/standard/ckeditor.js'
		]);
	}

	/**
	 * @param FieldWrapper $field
	 * @return FieldWrapper
	 */
	public function field(FieldWrapper $field) {
		$field->addAttribute('class', 'ckeditor');

		return $field;
	}

}