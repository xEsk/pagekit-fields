<?php
namespace Xescode\Fields;

use Pagekit\Application;
use Pagekit\Module\Module;
use Xescode\Fields\Plugin\FieldsPlugin;

class FieldsModule extends Module
{

    /**
     *
     * {@inheritdoc}
     *
     */
    public function main(Application $app)
    {
        $app->subscribe(new FieldsPlugin());
    }
}
