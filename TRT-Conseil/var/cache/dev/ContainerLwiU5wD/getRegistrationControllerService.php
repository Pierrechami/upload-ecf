<?php

namespace ContainerLwiU5wD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistrationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ENREGISTREMENT\RegistrationController' shared autowired service.
     *
     * @return \App\Controller\ENREGISTREMENT\RegistrationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ENREGISTREMENT/RegistrationController.php';

        $container->services['App\\Controller\\ENREGISTREMENT\\RegistrationController'] = $instance = new \App\Controller\ENREGISTREMENT\RegistrationController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\ENREGISTREMENT\\RegistrationController', $container));

        return $instance;
    }
}
