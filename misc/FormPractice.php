<!DOCTYPE html>
<head>

</head>
<body>
    <div id="form validation" name="form2">
        <form action="post" name="namemail">
            <input type="text" name="clientname" placeholder="Full Name"/></br>
            <input type="text" name="clientemail" placeholder="Email for Event Updates"/></br>
            <input type="checkbox" name="News_options" value="shows"/>shows</br>
            <input type="checkbox" name="News_options" value="fundraising"/> fundraising</br>
            <input type="checkbox" name="News_options" value="Newsletter"/>Newsletter</br>
            <input type="submit" name="submit-btn" value="Go"/>
        </form>
    
        <?php
        if (isset($_POST['submit-btn'])){
        $clientname = '';
        $clientemail = '';
        $News_options = '';
        }
        if(!empty($_POST["clientname"])){
        $clientname = $_POST['clientname'];
        }else {
        echo "<h2 style='color: blue'> name cannot be empty!</h2>";
          }
        if(!empty($_POST["clientemail"])){
            $clientname = $_POST['clientemail'];
            }else {
            echo "<h2 style='color: blue'> email cannot be empty!</h2>";
           }
        if(!empty($_POST["News_options"])){
                $clientname = $_POST['News_options'];
                }else {
                echo "<h2 style='color: blue'> News options cannot be empty!</h2>";
          }
         ?>
    </div> 
</body>
</html>