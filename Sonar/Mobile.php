<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/mobile.css">
</head>

<body>

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
                <li><a href="" id="about">About</a></li>
                <li><a href="" id="sonario">Make a Sonario</a></li>
                </span>
                <li ><a href=""><img src="img/stroke.png" width="50px;"></a></li>
            </ul>

        </div>
    </div>
</header>

<section id="slide-1">
    <img src="img/LOGO.png" alt="Sonario" class="logo">

    <div class="sticker">
        <a href="#slide-2" id="sticker">
            <img src="img/sticker-mobile.png" alt="sticker">
        </a>
    </div>
</section>

<section id="slide-2">
    <div class="container">
        <form autocomplete="off" class="form">
            <p>Where are we going? 	<input type="text" maxlength="45" name="name" id="sonario" placeholder="" /></p>
            <!--<p class="sonario-name">(Sonario name)</p>-->
            <button type="submit" name="foo" value="bar" id="sonario-btn">
                Start
            </button>

        </form>
        <a href=""><img src="img/question.png" class="question"></a>
    </div>
</section>
     <section id="slide-3">
        <div class="container">
            <form autocomplete="off" action="confirmation.php" method="POST">
                <p>I&rsquo;d like to name my sonario <input type="text" name="name" placeholder="............" /></p>
                <p>and the range from the sonario is <input type="text" name="range" placeholder="............" /> meters.</p>

                
                <p>invisible?<input type="text" id='lat' name="lat" value='' /></p>
                <p>invisible<input type="text" id='long' name="long" value='' /> </p>
                
                <button type="submit" name="foo" id="sonario-btn">
                    <img src="img/sticker-create.png" width="200px;" id="scenario-sticker">
                </button>

            </form>
            
            <script>
       
                           
            </script>
            

        </div>
    </section>
    
  


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="js/main.js"></script>
<script src="js/mobile.js"></script>
<script src="js/geo.js"></script>

</body>
</html>

