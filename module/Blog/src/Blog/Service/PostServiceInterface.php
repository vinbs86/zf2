<?php
// \module\Blog\src\Blog\Service\PostServiceInterface.php


namespace Blog\Service;


interface PostServiceInterface
{

    public function findAllPosts();

    public function findPost($id);

}
