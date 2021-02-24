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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>