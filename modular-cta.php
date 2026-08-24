<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

class ModularCtaPlugin extends Plugin
{
    public static function getSubscribedEvents(): array
    {
        return [
            'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0],
            'onGetPageBlueprints' => ['onGetPageBlueprints', 0],
        ];
    }

    public function onTwigTemplatePaths(): void
    {
        $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
    }

    public function onGetPageBlueprints(Event $event): void
    {
        $types = $event->types;
        $types->scanBlueprints(__DIR__ . '/blueprints');
    }

    public function onTwigSiteVariables(): void
    {
        if (!$this->isAdmin()) {
            if ($this->config->get('plugins.modular-cta.built_in_css', true)) {
                $this->grav['assets']->addCss('plugin://modular-cta/css/modular-cta.css');
            }
        }
    }
}
