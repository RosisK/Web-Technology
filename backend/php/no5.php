<?php 
class Book { 
    public $title;     
    public $author;     
    public $price; 
    public function __construct($title, $author, $price = null) { 
        $this->title = $title; 
        $this->author = $author; 
        $this->price = $price; 
    } 
    public function getInfo() { 
        $info = "Title: " . $this->title . "<br>"; 
        $info .= "Author: " . $this->author . "<br>"; 
        $info .= "Price: " . ($this->price !== null ? '$' . number_format($this->price, 2) : 'Not specified') . "<br><br>";         
        return $info; 
    } 
} 
$book1 = new Book("The Second Coming of Gluttony", "Butterfly Valley", 100); 
$book2 = new Book("Study", "Rosis Kharel"); 
echo $book1->getInfo(); 
echo $book2->getInfo(); 
?> 
