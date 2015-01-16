<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/bjqs-1.3.min.js"></script>
</head>

<body>



<main>
    <header>
    <div class="navigation-closed" id="navigation">
        <a href=""  id="nav-button">
            <div class="close" id="nav-button-image"></div>
            <!--<img src="img/navigation.png" alt="navigation">-->
        </a>

        <div class="links-closed" id="navigation-links">
            <ul>
                <span class="hover-links">
                <li><a href="#slide-1" id="home">Home</a></li>
                <li><a href="#slide-2" id="about">About</a></li>
                <li><a href="#slide-3" id="sonario">Make a Sonario</a></li>
                <li><a href="#slide-4" id="ideas">Awesome idea's</a></li>
                </span>
                <li ><a href=""><img src="img/stroke.png"></a></li>
            </ul>

        </div>
    </div>
    </header>

    <section id="slide-1" data--0-top="opacity: 1;" data--800-top="opacity: 0.6;">

        <div class="bg">

            <div class="components" data--0-top="opacity:1; margin-top: 0px;" data--800-top="opacity:0.2; margin-top: -50px;">

                <img src="img/LOGO.png" alt="Sonario" class="logo">

                <div class="sticker">
                    <a href="#slide-2"  id="sticker">
                        <img src="img/sticker.png" alt="sticker">
                    </a>

                </div>

                <div class="arrow">
                    <a href="#slide-2"  id="arrow-1">
                        <img src="img/arrow.png" alt="arrow">
                    </a>
                </div>

            </div>

        </div>

    </section>

    <section id="slide-2">

    </section>

    <section id="slide-3">
        <div class="container">
            <form autocomplete="off" action="confirmation.php" method="POST">
                <p>I&rsquo;d like to name my sonario <input type="text" name="name" placeholder="............" /></p>
                <p>It&rsquo;s latitude* is <input type="text" name="lat" placeholder="............" /></p>
                <p>and longitude* is <input type="text" name="long" placeholder="............" /> </p>
                <p>The range from the sonario is <input type="text" name="range" placeholder="............" /> meters.</p>

                <button type="submit" name="foo" id="sonario-btn">
                    <img src="img/sticker-create.png" width="200px;" id="scenario-sticker">
                </button>

            </form>
            
            
            
            
            <p class="text-small">*Find position <a href="http://www.latlong.net/" target="_blank">here</a></p>

        </div>
    </section>

    <section id="slide-4">
        <div class="container">
        <p class="awesome-ideas">Some pretty<br>
        awesome idea's</p>
        

        <div class="gallery">
                <div id="img-1">
                <a href="https://wordpress.com/">
                    <img src="img/scouts.png">
                    <div class="square">Group activity for scouting</div>
                </a>
                </div>
                <div id="img-2">
                <a href="https://wordpress.com/">
                    <img src="img/kid.png">
                    <div class="square">Treasure hunt for children</div>
                </a>
                </div>
                <div id="img-3">
                <a href="https://wordpress.com/">
                    <img src="img/friends.png">
                    <div class="square">Meeting someone you really missed</div>
                </a>
                </div>
        </div>


        </div>
        <div id="footer">
            <p>your creative idea here? </p>
            <p>send us an e-mail with your idea and some pictures </p>
            <p><a href="mailto:ideas@sonar.io?Subject=Idea" target="_top">ideas@sonar.io</a></p>
        </div>
    </section>

</main>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!--<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>-->
<script src="js/skrollr.js"></script>
<script src="js/main.js"></script>
<script src="js/desktop.js"></script>

<script type="text/javascript">
    var s = skrollr.init();
</script>
</body>
</html>

<?php


            $db = new PDO('mysql:host=localhost;dbname=dbsonario;charset=utf8', 'root', '');

            /*$statement = $db->prepare("SELECT lat FROM Sonario WHERE name='myplace' LIMIT 1");
            $statement->execute();
            $row = $statement->fetch(); */

            //echo $row['lat'];

            //var_dump($_POST);
            if(isset($_REQUEST['foo']))
            {
                $insert = $db->prepare("INSERT INTO sonario(name, longit, lat, radius) VALUES(:fname, :flongit, :flat, :frad)");
                $insert->execute(array(
                    "fname" => $_POST["name"],
                    "flongit" => $_POST["longit"],
                    "flat" => $_POST["lat"],
                    "frad" => $_POST["range"],
                ));
            }

            ?>
