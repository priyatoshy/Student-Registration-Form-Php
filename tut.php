<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intermediate</title>
</head>
<body>
    <h1>Status</h1>
   <?php
    
    $balance=250;
    if ($balance>500) {
        echo "<h1>$balance  is more than sufficient</h1>";

    } 
    else if($balance<=499 and $balance>=100)
    {
        echo "<h1>$balance  is  sufficient</h1>";

    }
    else {
        echo "<h1>$balance  is insufficient</h1>";
    }

    echo "<hr>";


    $TECHNOLOGY_STACK=array("HTML","CSS","JAVASCRIPT","MYSQL","GIT","DJANGO");
    

  

    foreach ($TECHNOLOGY_STACK as $key) {

        echo ".$key";
        echo "<br>";
    }

    function familyName($fname) {
        echo "$fname Refsnes.<br>";
      }
      
    familyName("FAMILY NAME");
   

    echo "<br>";

    //OBJECT ORIENTED PROGRAMMING
    class Fruit {
        // Properties
        public $name;
        public $color;
      
        // Methods
        function set_name($name) {
          $this->name = $name;
        }
        function get_name() {
          return $this->name;
        }
        function set_color($color) {
          $this->color = $color;
        }
        function get_color() {
          return $this->color;
        }
      }
      
      $apple = new Fruit();
      $apple->set_name('Apple');
      $apple->set_color('Red');
      echo "Name: " . $apple->get_name();
      echo "<br>";
      echo "Color: " .  $apple->get_color();
  

    
   ?>
   <div class="container">
   

   <?php
   echo "<h2>Manage Your College Website at ease</h2>";
   ?>

   <?php
   //Types of operator
   //Arithmetic Operator
   $VAR1=55;
   $VAR2=77;
   $VAR3=$VAR1+$VAR2;
   echo "$VAR1";
   echo " ";
   echo "$VAR2";
   echo " ";

   echo "$VAR3";
   echo "<br>";
   
   //Assignment Operator
   $VAR1+=5;
   echo "$VAR1";
   echo "<br>";
   //Compmarison Operator
   echo "$VAR1 == $VAR2 is ";
   //var_dump() is compare variables
   echo var_dump($VAR1==$VAR2);
   
   
   //Increment/Decrement Operator
   // --var or ++var vs var++ or var-- is simpll
   //in --var/++var ,the operation is done first then printed
   //Opposite is true for the alternate
   echo "<br>";
   $VAR1++;
   echo "$VAR1";
   echo "<br>";

   //Logical Operator and(&&) or(||) xor !(not)
   $myvar1=(true) and (true);
   echo "<br>";
   echo var_dump($myvar1);
   echo "<br>";
   echo $myvar1;
   echo "<br>";
   //Datatypes
   /*
   1.Int
   2.Float
   3.String
   4.Boolean
   5.Array
   6.Object
   7.Null
   8.Resource
   */


   //CONSTANT
   define("KEY",12342);
   echo KEY;
   echo "<br>";
 
   ?>
</div>
<br>
    
</body>
</html>