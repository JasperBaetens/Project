<!DOCTYPE html>
<html>
<head>
    <meta id="viewport" name="viewport" content ="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/mobile.css">
    
</head>

<body>
<script src="js/geo.js"></script>
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
                <li><a href="#slide-3" id="about">About</a></li>
                <li><a href="#slide-4" id="sonario">Make a Sonario</a></li>
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
        <form autocomplete="off" action="developer.php" method="POST" class="form">
            <p>Where are we going? 	<input type="text" maxlength="45" name="name" id="sonario" placeholder="" required/></p>
            <!--<p class="sonario-name">(Sonario name)</p>-->
            <button type="submit" name="foo" value="bar" id="sonario-btn" >
                Start
            </button>
        </form>

        
        
        
        <a href="#slide-3" id="question"><img src="img/question.png" class="question"></a>
    </div>
</section>

     <section id="slide-3">
            <div class="container">
                <p class="about">About</p>
                <img src="img/small-logo.png" class="small-logo">
                <p class="about-text">
                Sonario is a piece of technology that allows you to make your own utilization. You can <a href="#slide-4" id="create-text">create</a> a sonario by submitting a name and a range. Your current position will be used to set the location. People can track a location by entering the name of the sonario. Tracking is easy, just listen to the speed of the sound.
                </p>
            </div>
        </div>
    </section>

     <section id="slide-4">
        <div class="container">
            <form autocomplete="off" action="confirmation.php" method="POST">
                
                <p>I&rsquo;d like to name my sonario <input id="mobile_create_name" type="text" name="name" placeholder="............" required/></p>
                <p>and</p> 
                <p>the range from the sonario is <input id="mobile_create_rad" type="text" name="range" placeholder="............" required/> m.</p>
                <p id='validator'></p>
                
                <input type="hidden" id='lat-4' name="lat" value='' />
                <input type="hidden" id='long-4' name="long" value='' /> 
                
                <button type="submit" name="foo" id="sonario-btn">
                    <img src="img/create-sonario.png" width="200px;" id="sonario-sticker">
                </button>
            </form>
            

        </div>
    </section>

    
  


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="js/main.js"></script>
<script src="js/mobile.js"></script>
<script src="js/validation-mobile.js"></script>


</body>
</html>

