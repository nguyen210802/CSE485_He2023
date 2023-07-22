<?php

namespace model;

class Book implements IBook
{
    private $title;
    private $author;
    private $publisher;
    private $year;
    private $isbn;
    private $chapters;

    public function __construct(string $title,string $author,string $publisher,int $year,string $isbn, array $chapters)
    {
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->year = $year;
        $this->isbn = $isbn;
        $this->chapters = $chapters;
    }

    public function getTitle()
    {
        // TODO: Implement getTitle() method.
        return $this->title;
    }

    public function getAuthor()
    {
        // TODO: Implement getAuthor() method.
        return$this->author;
    }

    public function getPublisher()
    {
        // TODO: Implement getPublisher() method.
        return$this->publisher;
    }

    public function getYear()
    {
        // TODO: Implement getYear() method.
        return$this->year;
    }

    public function getISBN()
    {
        // TODO: Implement getISBN() method.
        return$this->isbn;
    }

    public function getChapters()
    {
        // TODO: Implement getChapters() method.
        return$this->chapters;
    }
}