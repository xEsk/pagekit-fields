<?php

namespace Xescode\Fields\Plugin;

use Pagekit\Content\Event\ContentEvent;
use Pagekit\Event\EventSubscriberInterface;

class FieldsPlugin implements EventSubscriberInterface
{
    /**
     * Content plugins callback.
     *
     * @param ContentEvent $event
     */
    public function onContentPlugins(ContentEvent $event)
    {
        $event->addPlugin('fields', [
            $this,
            'applyPlugin',
        ]);
    }

    /**
     * Defines the plugins callback.
     *
     * @param array $options
     *
     * @return string|null
     */
    public function applyPlugin(array $options)
    {
        if (isset($options['id']))
        {
            switch (strtolower($options['id']))
            {
                // date time fields
                case 'year':
                    return date('Y');
                case 'date':
                    return date(isset($options['format']) ? $options['format'] : '');
                // site information fields
                case 'server':
                    $value = isset($options['value']) ? strtoupper($options['value']) : '';
                    return isset($_SERVER[$value]) ? $_SERVER[$value] : '';
            }
        }
        return null;
    }

    /**
     *
     * {@inheritdoc}
     *
     */
    public function subscribe()
    {
        return [
            'content.plugins' => [
                'onContentPlugins',
                25,
            ],
        ];
    }
}