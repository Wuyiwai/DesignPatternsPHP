<?php


namespace DesignPatterns\Behavioral\Iterator;


class Book
{
    private $author;
    private $title;

    public function __construct(string $title, string $author)
    {
        $this->author = $author;
        $this->title = $title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthorAndTile(): string
    {
        return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}