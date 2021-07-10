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
class IndexControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedNcontainerame, array $options = null)
    {
        /*$entityManager = $container->get(EntityManager::class);
        $repository = $entityManager->getRepository(Book::class);
        return new IndexController($entityManager);*/
        return new IndexController($container->get('Doctrine\ORM\EntityManager'));
    }
}
