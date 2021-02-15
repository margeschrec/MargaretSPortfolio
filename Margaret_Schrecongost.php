<!DOCTYPE html>
<html>

<head>
    <title>MSchrecongost, Artist</title>
    <link rel="stylesheet" href="css/Margaret_Schrecongost.css"/>
</head>

<body>
    <div class="text" id="intro">
        <h1>Artist-Painter</h1>
        <p>My name is Margaret Schrecongost, I am a visual artist born and raised in Buffalo Ny. </p>
        <br>
        <p>Artist Statement: I make narrative work. I recontextualize the genere of historical narrative paintings and
            the female nude, by painting with reference to my own body in my figurative work. In my work, the female
            form transform from passive object to self portrait. I am the author, subject, and viewer.</br>

            My collage pieces serve to create narrative, without the weight of the figure. Composing memory-like
            snapshots of objects, meaning becomes playful. The objects place memory against the unknown future. These
            anxious narratives were made in isolation. Placing fear and axiety hand in hand with humor. Using humor to
            temper the anxiety of the future. Tension, anxiety, humor. </p>

    </div>
</br>
    <div id="FantasyGrowth">
        <img src="images/Home_Page/Fantasy_Growth.jpg" width="1198" height="848" />
    </div>
    <div id="FGList">
        <ul>
            <li>Oil on Canvas</li>
            <li>8'x5'</li>
            <li>2019</li>
        </ul>
    </div>
    <div class="FGD">
       
            <img src="images/Home_Page/F_G_Detail/F_D_01.jpg" width="300" height="150" />
         
         
            <img src="images/Home_Page/F_G_Detail/F_D_02.jpg" width="300" height="150" />
        
        
            <img src="images/Home_Page/F_G_Detail/F_D_03.jpg" width="300" height="150" />
        
       
            <img src="images/Home_Page/F_G_Detail/F_D_04.jpg" width="300" height="150" />
        
    </div>
    <br />
    <div class="text" id="process">
        <h2>Figurative Oil Painting in 2021</h2>
        <p>All work starts from a strong foundation built on sketches. These in turn are complied into a composition
            that gets tested for color through a digital drawing platform<br>I build the frames and stretch the canvas
            myself. </p>
    </div>
</br>
    <div class="text" id="CV">
        <h2>Below I have included a link to my CV</h2>
        <a href="link_pages/M_S_CV.htm" blank="target"> Link to CV</a>
    </div>
    <div class="art" id="portlinks">
        <H2>Paintings 2015-2020</H2>
        <p></p>
        <a href="https://www.margaretschrecongost.com/" target="blank"> 
            <img src="images/Home_Page/H_P_Detail/2020_D.jpg" width="300" height="300" />
        </a>
        <div id="desc"> 2020 </div>
        <a href="https://www.margaretschrecongost.com/2019" target="blank"> 
            <img src="images/Home_Page/H_P_Detail/2019_D.jpg" width="300" height="300" />
        </a>
        <div id="desc"> 2019 </div>
        <a href="https://www.margaretschrecongost.com/mybodymycorpse" class="portart" target="blank"> 
            <img src="images/Home_Page/H_P_Detail/2018_D.jpg" width="300" height="300" />
        </a>
        <div id="desc"> 2018 </div>
        <a href="https://www.margaretschrecongost.com/new-gallery" class="portart" target="blank">
            <img src="images/Home_Page/H_P_Detail/2017_D.jpg" width="300" height="300" />
        </a>
        <div id="desc"> 2017 </div>
        <a href="https://www.margaretschrecongost.com/2016" target="blank">
            <img src="images/Home_Page/H_P_Detail/2016_D.jpg" width="300" height="300" />
        </a>
        <div id="desc"> 2016 </div>
    </div>
    <div id="continspo">
        <a href="link_pages/Inspo_Page.htm" target="blank">
            <h2>Inspiration / Active Figurative Artists </h2>
        </a>
    </div>
    <div id="tablecontact">
        <table>
            <thead>
                <h2>Contact</h2>
            </thead>
            <tbody>
                <tr>
                    <th>Platform</th>
                    <th>Handle</th>
                </tr>
                <tr>
                    <td>Instagram</td>
                    <td>Maggieschrec</td>
                </tr>
                <tr>
                    <th>Website</th>
                    <th><a href="https://www.margaretschrecongost.com/" target="blank"> margaretschrecongost.com</a>
                    </th>
                </tr>
                </thead>
        </table>
    </div>
    <div name="form">
        <form action="Margaret_Schrecongost.php" method="POST" name="nameform">
            Name: <input type="text" name="name" placeholder="Type_Name_Here">
            Email: <input type="text" name="email" placeholder="Email_Address">
            <input type="submit" name="submit-btn" value="Go">
        </form>
        <?php 
    if (isset($_Post['submit-btn'])) {
        $name = $_Post['name'];
        $email = $_Post['email'];
        echo "<p>Info Entered:" . $name . ' ' . $email. "</p>";
    }
    ?>
    </div>
   
    <div name=textimput>
        <form method="Margaret_Schrecongost.php">
            <label for="Comments"> Comments, I wanna hear from you :)</label></br>
            <textarea id="Comments" name="Comments" rows="5" cols="70">
                Your reply here.
            </textarea>
            </br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>