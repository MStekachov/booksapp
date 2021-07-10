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
//use Doctrine\DBAL\Driver\PDO;
//use Doctrine\DBAL\Driver\PDO\Statement as PDODriverStatement;


class IndexController extends AbstractActionController
{

    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
        //$this->container->persist(Book::class);
    }

    public function indexAction()
    {
        //$books = $this->container->getRepository(Book::class)->findAll();
        //var_dump($this->container);
       $posts = $this->container->getRepository(Book::class);//->findBy(['status'=>Book::STATUS_PASSIVE], ['dateCreated'=>'DESC']);
       //var_dump($posts);
        return new ViewModel([
            'posts' => $posts
        ]);
        //return new ViewModel();
    }
}
