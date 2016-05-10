<?php

namespace CustomerVendorMember\Member;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\EventManager\EventManagerAwareTrait;
use Nnx\ModuleOptions\ModuleConfigKeyProviderInterface;
use Nnx\Module\IntegrationModuleTrait;
use Nnx\Module\IntegrationModuleInterface;
use Nnx\Module\CommonModuleOptionsInterface;
use NnxSkeletonMember\Member\Module as MemberModule;

class Module implements
    AutoloaderProviderInterface,
    ConfigProviderInterface,
    ModuleConfigKeyProviderInterface,
    IntegrationModuleInterface,
    CommonModuleOptionsInterface
{
    use IntegrationModuleTrait, EventManagerAwareTrait;
    /**
     * Имя секции в конфигах приложения, содержащая настройки модуля
     *
     * @var string
     */
    const CONFIG_KEY = 'customer-vendor-member';

    /**
     * Имя модуля
     *
     * @var string
     */ 
    const MODULE_NAME = __NAMESPACE__;

    /**
     * Возвращает список модулей, принадлежащих данному сервису
     *
     * @return array
     */
    public function getServiceModules()
    {
        return [
            MemberModule::MODULE_NAME
        ];
    }

    /**
     * @return string
     */
    public function getModuleConfigKey()
    {
        return static::CONFIG_KEY;
    }

    /**
     * @inheritdoc
     *
     * @return array
     */
    public function getCommonModuleOptions()
    {
        return [

        ];
    }

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