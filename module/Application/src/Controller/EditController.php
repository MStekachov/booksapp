<?php

/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
namespace Application\Controller;

use Application\Controller\Factory\IndexControllerFactory;
use Application\Entity\Book;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Doctrine\DBAL\Driver\PDOMySql\Driver;
use Doctrine\ORM\EntityManager;


class EditController extends AbstractActionController
{

    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function editAction()
    {
        try {
            $book = $this->container->getRepository(Book::class)->findById($this->params()->fromRoute('id'));
            return new ViewModel(['book' => $book[0]]);
        } catch(Throwable $t) {
            $t->getMessage();
        }
    }
}
