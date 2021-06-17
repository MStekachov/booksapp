<?php

/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
namespace Application\Controller;

use Application\Entity\Repository\DoctrineQueryRepository;
use Doctrine\ORM\Mapping\ClassMetadata;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{

    private $entityManager;
    private $doctrineRepository;

    public function __construct(/*$entityManager*/)
    {
        echo "Жопа!";
        /*$this->entityManager = $entityManager;

        if ($this->doctrineRepository==null){
            $this->doctrineRepository = new DoctrineQueryRepository($this->entityManager, new ClassMetadata('Application\Entity\Book'));
        }*/
    }

    public function indexAction()
    {
        return new ViewModel();
    }

    public function catalogAction()
    {
        $id = (int)$this->params()->fromRoute('id', 1);
        echo "<br />{$id}";
        /*$oneBook = $this->doctrineRepository->getOneBook($id);
        $viewModel = new TwigModel(['book'=>$oneBook[0]]);
        $viewModel->setTemplate('catalog');*/
        
        return new ViewModel();
    }
}
