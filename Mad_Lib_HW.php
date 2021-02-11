<!doctype html>
<html>

<head>
</head>

<body>
    <h1> Mad Lib Week 2 </h1>
    <div id="form">
        <form action="Mad_Lib_HW.php" method="post" name='madlib'>
            color <input type="text" name="color"></br>
            name <input type="text" name="name"></br>
            place <input type="text" name="place"></br>
            food <input type="text" name="food"></br>
            <input type="submit" name="submit-btn" value="Go" />
        </form>
    </div>
    </br>
    <?php
    if (isset($_POST['submit-btn'])) {
        $color = $_POST["color"];
        $name = $_POST["name"];
        $place = $_POST["place"];
        $food = $_POST["food"];
        echo ("My $color cat is named $name");
        echo ("They are from $place");
        echo ("You can tell, because they eat $food");
    }
    ?>
</body>

</html>