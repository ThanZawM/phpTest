<!DOCTYPE html>
<html>
    <body>
        <?php
            class Author {
                public $aname;
                public $gender;
                public $email;
                function __construct($aname, $gender, $email){
                    $this->aname = $aname;
                    $this->gender = $gender;
                    $this->email = $email;
                }
                function showInfo(){
                    echo "Author Name = ".$this->aname."<br>Gender = ".$this->gender."<br>Email = ".$this->email."<br>";
                }
            }

            class Book extends Author {
                public $name;
                public $price;
                public $quantity = 0;
                /*function __construct(){

                    $a = func_get_args();
                    $i = func_num_args();
                    if (method_exists($this,$f='__construct'.$i)) {
                        call_user_func_array(array($this,$f),$a);
                    }
                    $argv = func_get_args();
                    switch( func_num_args() ) {
                        case 3:
                            self::__construct1($argv[0], $argv[1], $argv[2]);
                            break;
                        case 4:
                            self::__construct2( $argv[0], $argv[1], $argv[2], $argv[3]);
                    }
                }
                function __construct1($name, $author, $price){
                    $this->name = $name;
                    $this->aname = $author;
                    $this->price = $price;    
                }*/
                function __construct($name, $author, $price, $quantity){
                    $this->name = $name;
                    $this->aname = $author;
                    $this->price = $price;
                    $this->quantity = $quantity;
                }
                function showInfo(){
                    echo "Book Name = ".$this->name."<br>Author Name = ".$this->aname."<br>Book Price = ".
                                $this->price."<br>Quantity = ".$this->quantity."<br>";
                }
            }
            $author = new Author("AuthorName", "male", "authorname@gmail.com");
            echo "<h4>Author Information</h4>";
            $author->showInfo();
            $book = new Book("BookName", $author->aname, 5000, 5);
            echo "<br>Book Name = ".$book->name."<br>";
            echo "<h4>Book Information</h4>";
            $book->showInfo();
        ?>
    </body>
</html>

