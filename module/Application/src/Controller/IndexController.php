<?php

/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
namespace Application\Controller;

use Application\Controller\Factory\IndexControllerFactory;
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
        $posts = $this->container->getRepository(Book::class)->findBy(['status'=>Post::STATUS_PASSIVE], ['dateCreated'=>'DESC']);
        
        // Визуализируем шаблон представления.
        return new ViewModel([
            'posts' => $posts
        ]);
    }

    public function catalogAction()
    {
        echo "0000";
        $post = new Book();
        $post->setTitle('Юрий Поляков');
        $post->setAnnotation('Любовь в эпоху перемен');
        $post->setStatus(Post::STATUS_ACTIVE);
        $currentDate = date('Y-m-d H:i:s');
        $post->setDateCreated($currentDate);        
        echo "1111";
        // Добавляем сущность в менеджер сущностей.
        $entityManager->persist($post);

        // Применяем изменения к БД.
        $entityManager->flush();
        return new ViewModel();
    }
}
