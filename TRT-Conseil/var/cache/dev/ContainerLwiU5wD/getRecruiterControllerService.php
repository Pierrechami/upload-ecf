<?php

namespace ContainerLwiU5wD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecruiterControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\RECRUITEUR\RecruiterController' shared autowired service.
     *
     * @return \App\Controller\RECRUITEUR\RecruiterController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/RECRUITEUR/RecruiterController.php';

        $container->services['App\\Controller\\RECRUITEUR\\RecruiterController'] = $instance = new \App\Controller\RECRUITEUR\RecruiterController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\RECRUITEUR\\RecruiterController', $container));

        return $instance;
    }
}
