<?php
    $str = "this";//$use for variable 
    echo $str; //echo use for print
    $lenn=strlen($str);//cal length of string
    echo "<br>the length of this string is   $lenn"    ;
    // . is string concatenation operator
     //echo "<br>the length of this string is ".  $lenn    ;
    //is same  as echo $lenn;
    //use of str_word _count()
    echo "<br>the no of wordS of this string is " .str_word_count
    ($str)  . " . thankyou "  ;

    //reverse string .strrev
    echo "<br>the reverse string is <br> "  .strrev
    ($str) . " . thankyou <br>"  ;


     //search string .strpos
     echo "<br>the search for is in this string is <br> "  .strpos
     ($str , "is") . " . thankyou <br>"  ;

      //replace string .str_replace
     echo "<br>the replace string is <br> "  .str_replace
     ("is", "at" , $str ) . " . thankyou <br>"  ;
     
?>  





?>