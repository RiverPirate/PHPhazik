<?php


class Author
{
    public string $name;
    public $books = [];

    // TODO Generate getters and setters of properties
    // TODO Generate constructor for all attributes. $books argument of the constructor can be optional

    /**
     * @param string $title
     * @param float  $price
     * @return \Book
     */
    function __construct(string $name, $books=null) {
        $this->name = $name;
        $this->books = $books;
    }
    function getName(): string {
        return $this->name;
    }

    function getBooks() {
        return $this->books;
    }

    function setName(string $name): void {
        $this->name = $name;
    }

    function setBooks($books): void {
        $this->books = $books;
    }

        public function addBook(string $title, float $price): Book
    {
        // TODO Create instance of the book. Add into $books array and return it
            $book =new Book($title,$price);
            $title->books[]=$book;
            return $this->books;
    }
}