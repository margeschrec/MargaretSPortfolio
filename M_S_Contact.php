<!DOCTYPE html>
<html>
    <head>
        <title>MSchrecongost, Contact</title>
        <link rel="stylesheet" href="css/Margaret_Schrecongost.css"/>
    </head>
    <Body>
    <nav id="nav-bar">
        <ul>
            <li><a href="Margaret_Schrecongost.php" class="navlinks">Home</a></li>
            <li><a href="M_S_Portfolio.html" class="navlinks">Portfolio</a></li>
            <li><a href="M_S_CV.html" class="navlinks">CV</a></li>
            <li><a href="M_S_Inspo.html" class="navlinks">Inspiration</a></li>
            <li><a href="M_S_Contact.php" class="navlinks">Contact</a></li>
        </ul>
    </nav>
        <div class="contactform">
            <form action="Margaret_Schrecongost.php" method="POST" name="contactform">
                <div class="cf-group">
                    <label>Name:</label><input type="text" name="name" placeholder="Type_Name_Here">
                </div>
                <div class="cf-group">
                 <label>Email:</label><input type="text" name="email" placeholder="Email_Address">
                </div>
                <div class="cf-group">
                    <label for="Comments"> Comments, I wanna hear from you :)</label></br>
                    <textarea id="Comments" name="Comments" rows="5" cols="70"></textarea>
                </div>
                </br>
                <input class="button" type="submit" value="Submit">
            </form>
            <?php 
        if (isset($_Post['submit-btn'])) {
            $name = $_Post['name'];
            $email = $_Post['email'];
            echo "<p>Info Entered:" . $name . ' ' . $email. "</p>";
        }
        ?>
        </div>
       
            </form>
        </div>
    </Body>
</html>