<?php

/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
namespace Application\Controller;

use Application\Entity\Book;
use Application\Entity\Repository\DoctrineQueryRepository;
use Doctrine\ORM\Mapping\ClassMetadata;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Doctrine\DBAL\Driver\PDOMySql\Driver;

use Doctrine\ORM\EntityManager;
//use Doctrine\DBAL\Driver\PDO;
//use Doctrine\DBAL\Driver\PDO\Statement as PDODriverStatement;


class IndexController extends AbstractActionController
{

    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function indexAction()
    {
        /*echo "Жопа\n";
        $configuration   = $this->container->get('ApplicationConfig');
        \Zend\Debug\Debug::dump($configuration, $label = null, $echo = true);*/
        $entityManager = $this->container->get('doctrine.entitymanager.orm_default'); 
        //\Zend\Debug\Debug::dump($entityManager, $label = null, $echo = true);
        $book = $entityManager->getRepository(Book::class)->findAll();;
        \Zend\Debug\Debug::dump($book, $label = null, $echo = true);
        $em=$this->container->get('Doctrine\ORM\EntityManager');
        //\Zend\Debug\Debug::dump($em, $label = null, $echo = true);
        $books=$em->getRepository(Book::class)->findAll();
        \Zend\Debug\Debug::dump($books, $label = null, $echo = true);
        return new ViewModel(['books'=>$books]);
    }

    public function catalogAction()
    {
        echo "dfdsf";
        $configuration   = $container->get('ApplicationConfig');
        \Zend\Debug\Debug::dump($configuration, $label = null, $echo = true);
        $em=$this->container->get('Doctrine\ORM\EntityManager');
        $books=$em->getRepository(Book::class)->findAll();
        $this->layout()->setTemplate('layout/layout2');
        \Zend\Debug\Debug::dump($books, $label = null, $echo = true);
        return new ViewModel(['book'=>$books]);
    }
}
