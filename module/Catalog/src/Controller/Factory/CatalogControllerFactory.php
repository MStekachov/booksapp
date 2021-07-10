<?php
namespace Application\Controller\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Application\Controller\IndexController;
use Doctrine\ORM\EntityRepository;

/**
 * Это фабрика для IndexController. Ее целью является инстанцирование
 * контроллера.
 */
class CatalogControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new IndexController($container->get('Doctrine\ORM\EntityManager'));
    }
}
