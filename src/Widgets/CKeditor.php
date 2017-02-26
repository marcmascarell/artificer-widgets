<?php

namespace Mascame\Artificer\Widgets;

namespace Mascame\Artificer\Widgets;

use Mascame\Artificer\Fields\Field;
use Mascame\Artificer\Widget\FieldWidget;
use Mascame\Artificer\Assets\AssetsManagerInterface;

class CKeditor extends FieldWidget
{
    public $name = 'CKEditor';

    public $description = 'CKEditor widget';

    public $slug = 'ckeditor';

    public $thumbnail = ''; // url

    /**
     * @param AssetsManagerInterface $manager
     */
    public function assets(AssetsManagerInterface $manager)
    {
        $manager->add([
            '//cdn.ckeditor.com/4.5.10/standard/ckeditor.js',
        ]);
    }

    /**
     * @param Field $field
     * @return Field
     */
    public function field(Field $field)
    {
        $field->addAttribute('class', 'ckeditor');

        return $field;
    }
}
