<!-- shift + ! -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;

}
.container{
    max: width 80%;
    background-color: grey;
    margin: auto;
    padding:23px;

}

</style>
<body>
    <div
        class="container">
        <h1>lets learn about php</h1>
        <p> YOUR PARTY STATUS IS HERE: </p>
    <?php
    $age = 7;
    if($age>18){
        echo "You can go to party";
    }
    else if($age==7){
        echo "You are 7 years old";
    }
    else{
        echo "You can not go to party";
    }


     //LOOP 

    $languages = array("Python", "C++", "PHP", "NodeJS");
    // echo $languages[0];
    // echo count ($languages);


    //loop in php
    $a = 0;
    while($a <= 10){
        echo "<br>the value of a is: ";
        echo $a;
        $a++;
    }

    //ITERATING ARAY IN PHP USING WHILE LOOP
    $a = 0;
    while($a < count($languages)){
        echo "<br>the value of language is: ";
        echo $languages [$a];
        $a++;
    }

    //Do while loop
    $a = 200;//yeh iteration toh chlegi he 
    do{
        echo "<br>the value of a is: ";
        echo $a;
        $a++;
    }while($a <10);


    //for loop
    //$a = 200; initial conition ki jarurat nhi hoti
    for ($i=0; $i <10 ; $i++) { 
        echo "<br>the value of a is: ";
        echo $a;
    }

    foreach ($languages as $value ) {
        echo "<br>the value from foreach of a is: ";
        echo $value; 
    }
    

    function print5(){
        echo "FIVE"
    }
    print5();

    function print_number($number){
        echo"<br>Your Number is ";
        echo $number;

    }
    print_number(45);
    print_number(435);
    print_number(5);
    // ?>


    
    </div>
    
</body>
</html>