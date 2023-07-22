<?php

namespace controller;

use model\Book;

class BookController
{
    private $books = array();
    public function addBook(Book $book){
        $this->books[] = $book;
    }
    public function sortByAuthor() {
        usort($this->books, function($a, $b) {
            return strcmp($a->getAuthor(), $b->getAuthor());
        });
    }

    public function sortByTitle() {
        usort($this->books, function($a, $b) {
            return strcmp($a->getTitle(), $b->getTitle());
        });
    }

    public function sortByYear() {
        usort($this->books, function($a, $b) {
            return $a->getYear() - $b->getYear();
        });
    }
    public function getBooks() {
        return $this->books;
    }
}