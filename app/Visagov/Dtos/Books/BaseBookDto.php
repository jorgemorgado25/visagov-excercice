<?php

namespace App\Visagov\Dtos\Books;

abstract class BaseBookDto {

    public function __construct(
        private string $title,
        private string $author
    ){}

    public function title()
    {
        return $this->title;
    }

    public function author()
    {
        return $this->author;
    }

}