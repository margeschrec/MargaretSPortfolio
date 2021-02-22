<!DOCTYPE html>
<head>
</head>
<body>
<?php
    $isMale = false;
    $isTall = false;
    if ($isMale && $isTall){
        echo "you are a tall male";
    } elseif ($isMale && !$isTall){
        echo "you are a short male";
    } elseif (!$isMale && $isTall){
        echo "you are not male but are tall";
    }else {
        echo "you are not male and not tall";
    } 
?> 
</body>
</html>