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
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $entityManager = $container->get('doctrine.entitymanager.orm_default');
        Zend\Debug\Debug::dump($entityManager, $label = null, $echo = true);
        // Инстанцируем контроллер и внедряем зависимости.
        return new IndexController($entityManager);
    }
}
