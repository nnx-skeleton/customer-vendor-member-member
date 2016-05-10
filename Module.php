<?php

namespace CustomerVendorMember\Member;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements
    AutoloaderProviderInterface,
    ConfigProviderInterface
{
    /**
     * Имя модуля
     *
     * @var string
     */ 
    const MODULE_NAME = __NAMESPACE__;

    /**
     * Имя секции в конфигах приложения, содержащая настройки модуля
     *
     * @var string
     */
    const CONFIG_KEY = 'customer-vendor-member';

    /**
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/',
                ),
            ),
        );
    }
    /**
     * @return mixed
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}