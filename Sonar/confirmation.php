<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>



<main>
    <header>
    <div class="navigation-closed" id="navigation">
        <a href="../Sonar"  id="nav-button">
            
            <img src="img/back.png" alt="back" id="back">
        </a>

        <div class="links-closed" id="navigation-links">
            <ul>
                <span class="hover-links">
                <li><a href="#slide-1" id="home">Home</a></li>
                <li><a href="#slide-2" id="about">About</a></li>
                <li><a href="#slide-3" id="sonario">Make a Sonario</a></li>
                <li><a href="#slide-4" id="ideas">Share your ideas</a></li>
                </span>
                <li ><a href=""><img src="img/stroke.png"></a></li>
            </ul>

        </div>
    </div>
    </header>

    <section id="slide-3" data--0-top="opacity: 1;" data--800-top="opacity: 0.6;">

        <div class="bg">
        <div class="confirm">
            <div class="components">
                <p class="your">Your</p>
                <a href="http://localhost/project/Sonar/"><img src="img/LOGO-pink.png" alt="Sonario" class="logo-3"></a>
                <p>Has been created!</p>

                <div class="tweet">
                <form autocomplete="off">
                <div class="tweet-wrapper">
                    <p>It's name is '
                    <?php if(isset($_POST["name"])){echo $_POST["name"];} ?>
                    '</p>
                    <p>Tweet it to <input type="text" name="tweet" id="tweet" placeholder="............" value="" /> </p>
                    </br>
                    
                    
                    <a href="https://twitter.com/intent/tweet?screen_name=NaneBoudewijns&text=sonario" id="tweet-btn" data-related="">Tweet</a>
                </div>

                    <script>
                            var tweet = document.getElementById("tweet");
                            
                            var btn = document.getElementById("tweet-btn");
                            
                            function useValue() {
                                var val = tweet.value;
                                btn.setAttribute("href", 'https://twitter.com/intent/tweet?screen_name='+val+'&text=+I%20have%20made%20a%20sonario%20fo%20you:%20+<?php echo $_POST["name"] ?>+%20%23sonario');
                            }
                            tweet.onchange = useValue;  
                            
                            
                        
                            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id))                  {js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
                    </script>

                </form>
                </div>
            </div> 
        </div>
        </div>

    </section>

</main>

</body>
</html>

                    <?php

//var_dump($_POST);

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
                    "flongit" => $_POST["long"],
                    "flat" => $_POST["lat"],
                    "frad" => $_POST["range"],
                ));
            }

            ?>

