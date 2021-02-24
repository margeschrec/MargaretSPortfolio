<!doctype html>
<html>
<head>
</head>
<body>
    <h1> Mad Lib Week 2 </h1>
    <div id="form">
        <form action="Mad_Lib_HW.php" method="post" name='madlib'>
            color <input type="text" name="color"/></br>
            name <input type="text" name="name"/></br>
            place <input type="text" name="place"/></br>
            food <input type="text" name="food"/></br>
            <input type="submit" name="submit-btn" value="Go"/>
        </form>
    </div>
    </br>
    <?php
    if (isset($_POST['submit-btn'])){
        $color = '';
        $name = '';
        $place = '';
        $food = '';
        }
        if(!empty($_POST['color'])){
            $color = $_POST['color'];
        }else {
            echo "<h1 style='color: red'> color cannot be empty!!</h1>";
        }
        if(!empty($_POST['name'])){
            $name = $_POST['name'];
        }else {
            echo "<h1 style='color: red'> name cannot be empty!!</h1>";
        }
        if(!empty($_POST['place'])){
            $place = $_POST['place'];
        }else {
            echo "<h1 style='color: red'> place cannot be empty!!</h1>";
        }
        if(!empty($_POST['food'])){
            $food = $_POST['food'];
        }else {
            echo "<h1 style='color: red'> name cannot be empty!!</h1>";
        }

        
        {
        $color = $_POST["color"];
        $name = $_POST["name"];
        $place = $_POST["place"];
        $food = $_POST["food"];
        echo ("My $color cat is named $name </br>"); 
        echo ("They are from $place </br>");
        echo ("You can tell, because they eat $food </br>");
        }
    ?>
  
</body> 
</html>