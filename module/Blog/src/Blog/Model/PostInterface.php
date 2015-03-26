<?php
// \module\Blog\src\Blog\Model\PostInterface.php

namespace Blog\Model;

interface PostInterface
{
    public function getId();

    public function getTitle();

    public function getText();

}