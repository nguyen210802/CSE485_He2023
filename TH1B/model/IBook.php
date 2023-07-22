<?php

namespace model;

interface IBook
{
    public function getTitle();
    public function getAuthor();
    public function getPublisher();
    public function getYear();
    public function getISBN();
    public function getChapters();

}