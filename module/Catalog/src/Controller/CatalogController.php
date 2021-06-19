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

class CatalogController extends AbstractActionController
{
    public function indexAction()
    {
        $var = [12, 14];
        \Zend\Debug\Debug::dump($var, $label = null, $echo = true);
        /*$entityManager = $container->get('doctrine.entitymanager.orm_default');
        Zend\Debug\Debug::dump($entityManager, $label = null, $echo = true);*/
        $this->layout()->setTemplate('layout/layout2');
        return new ViewModel();
    }
}