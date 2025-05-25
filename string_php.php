<!-- This is the example of string methods. -->
 <?php
    $string="Hello welcome to php";
    echo "The string is :".$string;
    echo "</br>";
    echo "The length of string is:".strlen($string)."</br>";
    echo "The words in the string are: ".str_word_count($string);
 ?>