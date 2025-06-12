<?php 
// 1.You are required to create a simple Library System in PHP using Object-Oriented Programming (OOP) principles. The system should have the following functionalities:
// 2.Create a Book class with private properties for title and availableCopies.
// Create a Member class with a private property for name.
// 3.Implement methods in the Book class to borrow and return books. This borrowBook method should decrease the available copies and returnBook method should increase the available copies.
// 4.Implement methods in the Member class to borrow and return books. Here the borrowBook method should take book as an argument and returnBook method should also take book as an argument.
// 5.Write a PHP program to demonstrate the usage of the library system, including adding books to the library, adding members, borrowing books, returning books, and displaying the available books.
// 6.You have to create  2 books and 2 members. Member One has to borrow  book 1 and Member Two has to borrow  book 2.
// 7.For your reference we have provided a template.
// <!-- Output must look like this:

// Available Copies of 'The Great Gatsby': 4

// Available Copies of 'To Kill a Mockingbird': 2 -->

// ======= Project Start Here ============ 

class Book {

 // TODO: Add properties as Private
 private $title;
 private $availableCopies;


 public function __construct($book_title, $book_availableCopies) {

     // TODO: Initialize properties
     $this->title = $book_title;
     $this->availableCopies = $book_availableCopies;

     }

// TODO: Add getTitle method
  public function getTitle(){
    return $this->title;
  }

 

 // TODO: Add getAvailableCopies method
  public function getAvailableCopies(){
    return $this->availableCopies;
  }
 


 // TODO: Add borrowBook method
   public function borrowBook(){

    if($this->availableCopies>0){
        $this->availableCopies--;
    }
       
   }


 // TODO: Add returnBook method 
public function returnBook(){
      if($this->availableCopies>0){
                $this->availableCopies++;

    }
   }

}

class Member extends Book {

 // TODO: Add properties as Private
  private $name;

 public function __construct($member_name) {

      // TODO: Initialize properties
      $this->name = $member_name;
     }


 // TODO: Add getName method
public function  getName(){
    return $this->name;
}
 

 // TODO: Add borrowBook method
 public function  borrowBook_member(Book $book_name_borrow){
   $book_name_borrow->borrowBook();
      
 }
 


 // TODO: Add returnBook method
  public function  returnBook_member(Book $book_name_return){
    $book_name_return->returnBook();
    
 }

}

// creating books
$book_one = new Book("The Great Gatsby",5);
$book_two = new Book("To Kill a Mockingbird",3);

// creating members
$member_one = new Member("John Doe");
$member_two = new Member("Jane Smith");

// borrow book methods apply
$member_one->borrowBook_member($book_one);
$member_two->borrowBook_member($book_two);

// final Output

printf("Available Copies of '%s': %s \n",$book_one->getTitle(),$book_one->getAvailableCopies());
printf("Available Copies of '%s': %s",$book_two->getTitle(),$book_two->getAvailableCopies());


?>