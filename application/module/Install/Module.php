<?php

namespace Install;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module {

    public function onBootstrap(MvcEvent $e) {

        $application = $e->getApplication();
        $eventManager = $e->getApplication()->getEventManager();
    }

    public function getConfig() {
        return include __DIR__ . '/config/module.php';
    }

    public function getAutoloaderConfig() {

        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ . '\\Controller' => __DIR__ . '/controllers',
                ),
            ),
        );
    }

}
