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

    public function __construct($container = null)
    {
        $this->container = $container;
    }

    public function indexAction()
    { 
        $entityManager = $container->get('doctrine.entitymanager.orm_default'); 
        //$em=$this->container->get('Doctrine\ORM\EntityManager');
        //\Zend\Debug\Debug::dump($this->container, $label = null, $echo = true);
        //$books=$em->getRepository(Book::class)->findAll();
        //$this->layout()->setTemplate('layout/layout2');
        //\Zend\Debug\Debug::dump($books, $label = null, $echo = true);
        //return new ViewModel(['book'=>$books]);
        //return new ViewModel();
        //$em=$this->container->get('Doctrine\ORM\EntityManager');
        \Zend\Debug\Debug::dump(Driver::class, $label = null, $echo = true);
        //\Zend\Debug\Debug::dump($this->container, $label = null, $echo = true);
        //$books=$em->getRepository(Book::class)->findAll();
        return new ViewModel(['books'=>$books]);

    }

    public function catalogAction()
    {
        echo "dfdsf";
        $em=$this->container->get('Doctrine\ORM\EntityManager');
        $books=$em->getRepository(Book::class)->findAll();
        $this->layout()->setTemplate('layout/layout2');
        \Zend\Debug\Debug::dump($books, $label = null, $echo = true);
        return new ViewModel(['book'=>$books]);
    }
}
