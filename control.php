<!-- Control statements  -->
<?php
    $a=610;
    $b=200;
    $c=100;
    if($a>$b && $b>$c ){
        echo "$a is the greatest";
    }
    elseif($a>$c && $c>$b){
        echo "$a is the greatest";
    }
    elseif($b>$a && $a>$c){
        echo "$b is the greatest";
    }
    elseif($b>$c && $c>$a){
        echo "$b is the greatest";
    }
    elseif($c>$a && $a>$b){
        echo "$c is the greatest.";
    }
    elseif($c>$b && $b>$a){
        echo "$c is the greatest.";
    }
?>