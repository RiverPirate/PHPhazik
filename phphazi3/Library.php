<?php
require_once "AbstractLibrary.php";

class Library extends AbstractLibrary
{
    // TODO Implement all the methods declared in AbstractLibrary class
    public function addAuthor(string $name): \Author {
        $author=new Author($name);
        $authors= $this->getAuthors();
        $this->setAuthors($authors);
        $authors[]=$author;
        return $author;
    }

    public function addBookForAuthor($authorName, \Book $book) {
        foreach ($this->getAuthors() as $a){
            if($a->getName()===$authorName) $a->addBook($book->getPrice (),$book->getTitle ());
        }
    }

    public function getBooksForAuthor($authorName) {
        foreach ($this->getAuthors() as $a){
            if($a->getName()===$authorName)                return $a->getBook();
        }
        
    }

    public function print() {
        foreach ($this->getAuthors() as $a){
            echo $a->getName()."<br>";
            echo "<br>";
            foreach ($a->getBooks() as $b){
                echo $b."<br>";
            }
            echo "<br>";
        }
        echo "<br>";
    }

    public function search(string $bookName): \Book {
        foreach ($this->getAuthors() as $a){
            for($i=0;$i<count($a->getBooks());$i++){
                if($bookName===$a->getBooks()[$i]->title) return new Book($bookName, $a->betBooks()[$i]->price,$a);
            }
        }
        
        
    }

}