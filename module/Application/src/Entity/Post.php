<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
// Создаем новую сущность Post.
$post = new Post();
$post->setTitle('Top 10+ Books about Zend Framework 3');
$post->setContent('Post body goes here');
$post->setStatus(Post::STATUS_PUBLISHED);
$currentDate = date('Y-m-d H:i:s');
$post->setDateCreated($currentDate);        

// Добавляем сущность в менеджер сущностей.
$entityManager->persist($post);

// Применяем изменения к БД.
$entityManager->flush();
