<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div
        class="container">
        This is my first php website
        <?php
        define('PI' , 3.14); //CONSTANT
            echo "Hello world and this is printed using php"; //ECHO IS USE TO PRINT
            //We can use the Echo statement with and without parentheses, and it is faster in nature. 
            
            
            
            //COMMENTS:
            //single line comment
            /*multiple line comment
            */
            // jska
            // jflksef(ctrl+ /)

            // variables- $

            //a variable starts with the $ sign, followed by the name of the variable:
            $Variable1 =10;
            $Variable2 = 5;
            echo $Variable1;
            echo $Variable2; //not case sensitive echo=Echo

            echo $Variable1 + $Variable2;


            //operators
            //ARITHMETIC
            echo "<br>"  ; //NEW LINE 
            echo "the value of Variable1 + Variable2 is ";
            echo "<br>"  ; //new line
            echo $Variable1 + $Variable2;


            echo "<br>"  ;
            echo "the value of Variable1 - Variable2 is ";
            echo "<br>"  ; //new line
            echo $Variable1 - $Variable2;

            echo "<br>"  ;
            echo "the value of Variable1 * Variable2 is ";
            echo "<br>"  ; //new line
            echo $Variable1 * $Variable2;


            echo "<br>"  ;
            echo "the value of Variable1 / Variable2 is ";
            echo "<br>"  ; //new line
            echo $Variable1 / $Variable2;

            //ASSIGNMENT OPERATOR
            $newVar = $Variable1;
            echo "The value of new variable is ";
            echo $newVar;
            echo "<br>"  ;
            $newVar += 1;
            echo "The value of new variable is ";
            echo $newVar;
            echo "<br>"  ;
            $newVar -= $Variable1;
            echo "The value of new variable is ";
            echo $newVar;
            echo "<br>"  ;
            $newVar *= $Variable1;
            echo "The value of new variable is ";
            echo $newVar;
            echo "<br>";


            //COMPARISON OPERATOR
            echo "<h1> Comparison Operators </h1>";
            //BOOLEAN DATA TYPE
            // newline "<br>";
            echo"the value of 1==4 is ";
            echo var_dump(1==4);
            echo "<br>"  ;
            echo"the value of 1!=4 is ";
            echo var_dump(1!=4);
            echo "<br>"  ;
            echo"the value of 1>=4 is ";
            echo var_dump(1>=4);
            echo "<br>"  ;
            echo"the value of 1<=4 is ";
            echo var_dump(1<=4);
            echo "<br>"  ;


             //INCREMENT OPERATOR
             echo "<h1> INCREMENT Operators </h1>";
            //  $Variable1++;
            //ALT SHIFT -MULTIPLE CURSOR
            // echo $Variable1++;
            // echo "<br>";
            // echo $Variable1;
            // echo "<br>";



            //  $Variable1--;
            // echo $Variable1--;//10
            // echo "<br>";
            // echo $Variable1; 
            // echo "<br>";//9



            // //  ++$Variable1;
            // echo ++$Variable1;//11
            // echo "<br>";
            // echo $Variable1;//11


            // //  --$Variable1;
            // echo --$Variable1;//9
            // echo "<br>";
            // echo $Variable1;//9



            //LOGICAL OPERATOR
            // echo "<h1> LOGICAL Operators </h1>";
            //AND (&&)
            //$myVar = (true) and (true);
            $myVar = (true and false);
            // echo "<br>" ;
            // echo var_dump($myVar);
            //OR (||)
            // $myVar = (true) || (true);
            // echo "<br>"  ;
            // echo var_dump($myVar);
            //XOR
            // $myVar = (true) XOR (true);
            // echo "<br>"  ;
            // echo var_dump($myVar);
        ?>

        <?php
        //Data types in php
        // 1. String
        // 2. Integer
        // 3. Float
        // 4. Boolean
        // 5. Array   
        // 6. Object   
        echo "<br> Data types <br>";
        // $var = "this is a string" ;
        // echo  var_dump ($var);
        // echo "<br>";
        // $var =67;
        // echo  var_dump ($var);
        // echo "<br>";
        $var = true;
        echo var_dump($var);

        echo "<br>";
        echo PI;
        
        
        ?>
    </div>
    
</body>
</html>