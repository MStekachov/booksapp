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
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id")   
     */
    protected $id;

    /** 
     * @ORM\Column(name="title")  
     */
    protected $title;

    /** 
     * @ORM\Column(name="annotation")  
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
    
    // Возвращает аннотацию.
    public function getContent() 
    {
        return $this->content; 
    }
    
    // Задает аннотацию.
    public function setContent($content) 
    {
        $this->content = $content;
    }
    
    // Возвращает дату занесения данной книги в твблицу.
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