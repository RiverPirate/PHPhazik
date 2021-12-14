<?php


class Book
{
    public string $title;
    public float $price;
    public Author $author;

    function __construct(string $title, float $price, Author $author=null) {
        $this->title = $title;
        $this->price = $price;
        $this->author = $author;
        
    }
    
    function getTitle(): string {
        return $this->title;
    }

    function getPrice(): float {
        return $this->price;
    }

    function getAuthor(): Author {
        return $this->author;
    }

    function setTitle(string $title): void {
        $this->title = $title;
    }

    function setPrice(float $price): void {
        $this->price = $price;
    }

    function setAuthor(Author $author): void {
        $this->author = $author;
    }
    public function __toString() {
        return "cim:  ".$this->title."  szerzo:  ".$this->author."   ar:   ".$this->price;
    }

    // TODO Generate getters and setters of properties
    // TODO Generate constructor for all attributes. $author argument of the constructor can be optional
}