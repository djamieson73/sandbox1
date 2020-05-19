<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
     <?php


// String types
          echo "Hello World, ";
          $characterName = "Darryl"; // string
          $characterAge = 35; // integer
          $gpa = 3.2; // double
          $passed = true; // binary
          $emptyexample = null;  // null
          echo "my name is $characterName, I am $characterAge years old with a gpa of $gpa.";
          echo "<br>Did I pass? " . $passed;
          echo "<br>Is this empty? " . $emptyexample . "<br><br>";
             //this doesn't work because $emptyexample doesn't apc_exists


// String functions
           $phrase = "Giraffe Academy";
           echo "$phrase[0]"; // prints "G"
           echo $phrase[1]; // prints "i"
           echo strtolower($phrase);
           echo strtoupper($phrase);
           echo strlen($phrase);
           echo str_replace("Giraffe", "Panda", $phrase);
           echo substr($phrase, 0, 6);


// Numbers
           echo 5 + 9 . "<br>";
           echo 5 / 9 . "<br>";
           echo 5 * 0 . "<br>";
           echo 10 % 3 . "<br>";   // (10 mod 3 = 1)
           $num = 10; $num += 25;
           $num++;   // 'plus 1
           echo $num . "<br>";
           echo abs(-100) . "<br>";   // 100
           echo pow(2, 4) . "<br>";  // 16 (2 raised to 4th power)
           echo sqrt(144) . "<br>";    // 12
           echo max(2, 10) . "<br>";   // 10 (prints the larger number)
           echo min(2, 10) . "<br>";   // 2
           echo round(3.2) . "<br>";   // 3
           echo round(3.7) . "<br>";   // 4
           echo ceil(3.3) . "<br>"; // 4
           echo floor(3.3) . "<br><br>"; // 3


// Forms
           echo "GET posts to url; POST doesn't post to url<br>";
           echo "\$_GET[\"txtName\"] = value of inupt textbox with name of txtName<br><br>";   //$_GET["txtName"]


// Arrays
           $friends = array("Kevin", "Karen", "Oscar", "Jim");
           echo $friends[0];   // Kevin
           $friends[1] = "Marcy";   // replace existing
           $friends[4] = "Steve";   // adds an array !!!
           echo count($friends) . "<br><br>";   // 4


// Checkboxes
          // <input type="checkbox" name="fruits[]" value="apple">
          // <input type="checkbox" name="fruits[]" value="orange">
             $fruits = $_POST["fruits"];
             echo $fruits[0] . "<br><Br>"; // apples


// Associative Array
            $grades = array("Jim"=>"A+", "Dan"=>"B", "Pam"=>"C-");
            echo $grades["Jim"];   // 'A+
            echo $grades["Jim"] = "F";   // 'changes to F
            echo count($grades) . "<br><br>";


// Functions
            function sayHi($strname, $iage){
               echo "Hello $strname, you are $iage . <br><br>";
                 }

            sayHi("Darryl", "47");    //'this echoes "Hello Darryl, you are 47"


// Returns
            function cube($num){
              return $num * $num * $num;
              echo "hello";   // 'this doesn't print because return means you're done with function
            }
            $cubeResult = cube(4) . "<br><br>";   //
            echo cube(4);


// If Statements
                $isMale = true;
                $isTall = true;
                  if($isMale && $isTall){
                    echo "You are a tall male";
                  }
                  elseif($isMale && !$isTall)
                  {
                    echo "You are a short male";
                  } else {
                    echo "You are not male";
                  }

                  if($isMale || $isTall){
                    echo "You are a tall male";
                  } else {
                    echo "You are not male";
                  }

                 function getMax($num1, $num2){
                   if($num1 > $num2){
                     return $num1;
                   } else {
                     return $num2;
                   }
                 }
                 echo getMax(3, 90);

              // '''''''''''''''''''''you can also use != or == as in c#
                 function getMax2($num1, $num2, $num3){
                   if($num1 >= $num2 && $num1 >= $num3){
                      return $num1;}
                 }


// Switch Statements (used when you have just one value and compare to many)
                 $grade = $_POST["grade"];
                 switch($grade){
                    case "A":
                      echo "You did amazing!";
                      break;
                   case "B":
                      echo "You did pretty good";
                      break;
                   default:
                      echo "Invalid grade";   // e.g. default means if none of the above cases are true
                 }


// While Loops (while is at top)
                 $index = 1;
                 while($index <= 5){
                    echo "$index <br>";          //'prints 1,2,3,4,5
                    $index++;
                 }


// Do While Loops (while is at bottom)
                 $index = 6;
                 do{
                     echo "$index <br>";
                     $index++;
                   }while($index <= 5);     // 'prints just a 6


// For Loops
                   for($i = 1; $i <= 5; $i++){
                       echo "$i <br>";       //   'prints 1,2,3,4,5
                   }


// For Loops with an array
                   $luckyNumbers = array(4, 8, 14, 16, 23, 42);
                   for($i = 0; $i < count($luckyNumbers); $i++){
                       echo "$luckyNumbers[$i]";
                   }


// Including HTML - had to comment out so it wouldn't error since I don't have a header.php
                  $title = "My first Post";
                  $author = "Mike";
              /*    include "header.php";    */   // title and author variables can be in header.php file


// Classes and Objects
                  class Book {        // this is creating a book data type
                     var $title;
                     var $author;
                     var $pages;
                  }
                  $book1 = new Book;    // an object is an instance of a class (Book), the object is 'new Book'
                  $book1->title = "Harry Potter";
                  $book1->author = "JK Rowling";
                  $book1->pages = 400;
                  echo $book1->title;
                  echo $book1->author;

// Constructors   // a function that is going to be called when you create the object
                  // *** Difference between Constructor and Object function?
                      // Constructors are invoked implicitly, the objection function
                      // must be invoked explicitly (it must be called)
                  class Book2 {
                     var $title;
                     var $author;
                     var $pages;
                     function __construct($name){ // this prints Mike automatically, it's implied
                        echo "$name";
                     }
                     }
                     $book1 = new Book2("Mike");


// What if you wanted to create 50 books? well, use constructors - saves a TON of code
                  class Book3 {
                     var $title;
                     var $author;
                     var $pages;
                    function __construct($constrTitle, $constrAuthor, $constrPages){ //take note of $this
                       $this->title = $constrTitle;    // $this is a keyword
                       $this->author = $constrAuthor;
                       $this->pages = $constrPages;
                       }
                    }
                    $book1 = new Book3("Harry Potter", "JK Rowling", 400);
                    $book1->title = "Hunger Games";
                    $book2 = new Book3("Lord of the Rongs", "Rolstein", 700);
                    echo $book1->title;      // should print Hunger Games


// Object Functions    'the hasHonors function
                    Class Student {
                       var $name;
                       var $major;
                       var $gpa;
                       function __construct($name, $major, $gpa){
                          $this->name = $name;
                          $this->major = $major;
                          $this->gpa = $gpa;
                       }
                      function hasHonors(){
                         if($this->gpa >= 3.5){
                            return "true";
                         }
                         return "false";
                      }
                    }

                    $student1 = new Student("Jim", "Business", 2.8);
                    $student2 = new Student("Pam", "Art", 3.6);
                    echo $student1->hasHonors();     // prints false because student1 has a 2.8


// Getters & Setters     'special functions inside classes that allow us to control access:
                             // E.G. You can't access $rating outside of class because it's private,
                             //      however, you can use get/set functions to get around that.

                    class Movie{             // visibility modifier = e.g. private
                       public $title;        // (public is all open, var is the same)
                       private $rating;      // (private = restricted - not outside class)

                       function __construct($title, $rating){
                          $this->title = $title;
                          $this->rating = $rating;
                       }

                       function getRating(){   // this GETS it, it returns the rating
                          return $this->rating;
                       }

                       function setRating($rating){
                          if($rating == "PG-13" || $rating == "G" || $rating == "PG" || $rating == "R"){
                             $this->rating = $rating;
                         }
                       }
                    }

                    $avengers = new Movie("Avengers", "PG-13");
                    $avengers->setRating("Dog");    // you get to see it even though it's privated because of the get/set deal
                    // never says dog because setRating doesn't include Dog as a value
                    echo $avengers->getRating();    // this lets you see it because of getRating() function even though it's private



// Inheritance      'a class can inherit all the attributes of another class
                    Class Chef {
                       function makeChicken(){
                         echo "The chef makes chicken <br>";
                         }
                       function makeSalad(){
                         echo "The chef makes salad <br>";
                         }
                       function makeSpecialDish(){
                         echo "The chef makes bbq ribs";
                         }
                       }

                       class ItalianChef extends Chef {  // italianchef inherits chef class
                         function makePasta(){
                            echo "The chef makes pasta";
                         }
                         function makeSpecialDish(){
                            echo "The chef makes chicken parm";
                         }
                       }

                       $chef = new Chef();
                       $chef->makeChicken();      // echoes "The chef makes chicken <br>"

                       $italianchef = new ItalianChef();
                       $italianchef->makeChicken();      // echoes "The chef makes chicken <br>"

                       $italianchef = new ItalianChef();
                       $italianchef->makePasta();      // echoes "The chef makes pasta <br>"

                       // ** this is called 'override function': **
                       $chef = new Chef();
                       $chef->makeSpecialDish();      // echoes "The chef makes bbq ribs <br>"

                       $italianchef = new ItalianChef();
                       $italianchef->makeSpecialDish();      // echoes "The chef makes chicken parm <br>"





     ?>
  </body>

</html>
