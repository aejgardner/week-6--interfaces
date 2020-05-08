<?php

namespace App\Library;

class Book implements TitledInterface
{
    private $title;
    private $pages;
    private $currentPage = 1;

    public function __construct(string $title, int $pages)
    {
        $this->title = $title;
        $this->pages = $pages;
    }

    public function read(int $pagesRead) : Book // because "this" is an object of the type Book, you are returning the name of the object, in this case, Book
    {
        $this->currentPage += $pagesRead;
        return $this;
    } 

    public function currentPage() : int
    {
        return $this->currentPage;
    }

    public function title() : string
    {
        return $this->title;
    }
}