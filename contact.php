<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MSchrecongost, Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" />
</head>

<Body>
<?php include 'navbar.php'; ?>
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
            echo "<p>Info Entered:" . $name . ' ' . $email . "</p>";
        }
        ?>
    </div>

    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</Body>

</html>
