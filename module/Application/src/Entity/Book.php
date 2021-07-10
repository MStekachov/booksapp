<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Этот класс представляет собой книгу в соотствующей таблице.
 * @ORM\Entity
 * @ORM\Table(name="book")
 */
class Book 
{
    // Константы статуса книги.
    const STATUS_ACTIVE       = 1; // Книга в наличие.
    const STATUS_PASSIVE      = 2; // Книга отсутствует.

    /**
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")   
     */
    protected $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    protected $title;

    /** 
     * @var string|null
     *
     * @ORM\Column(name="annotation", type="string", length=1250, nullable=true)  
     */
    protected $annotation;

    /** 
     * @ORM\Column(name="status")  
     */
    protected $status;

    /**
     * @ORM\Column(name="date_created")  
     */
    protected $dateCreated;
  
    // Возвращает ID данной книги.
    public function getId() 
    {
        return $this->id;
    }

    // Задает ID данной книги.
    public function setId($id) 
    {
        $this->id = $id;
    }

    // Возвращает название.
    public function getTitle() 
    {
        return $this->title;
    }

    // Задает название.
    public function setTitle($title) 
    {
        $this->title = $title;
    }

    // Возвращает аннотацию.
    public function getAnnotation() 
    {
        return $this->annotation;
    }

    // Задает аннотацию.
    public function setAnnotation($annotation) 
    {
        $this->annotation = $annotation;
    }

    // Возвращает статус.
    public function getStatus() 
    {
        return $this->status;
    }

    // Устанавливает статус.
    public function setStatus($status) 
    {
        $this->status = $status;
    }
    
    // Возвращает дату занесения данной книги в таблицу.
    public function getDateCreated() 
    {
        return $this->dateCreated;
    }
    
    // Задает дату занесения данной книги в таблицу.
    public function setDateCreated($dateCreated) 
    {
        $this->dateCreated = $dateCreated;
    }
}