<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Catalog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Doctrine\ORM;
//use \ZfcTwig\View;;

class CatalogController extends AbstractActionController
{

    public function __construct($container)
    {
        $this->container = $container;
        //$this->container->persist(Book::class);
    }

    public function indexAction()
    {
        $var = [12, 14];
        /*\Zend\Debug\Debug::dump($var, $label = null, $echo = true);
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
        $entityManager->flush();*/
        return new ViewModel(['arr' => $var]);
    }
}