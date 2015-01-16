<html>
<head>
<link rel="icon" type="image/png" href="img/favicon.png" />
<link rel="stylesheet" href="css/Mobile.css">
</head>

<body>
<main>
    <section id="slide-1">
    <img src="img/LOGO.png" alt="Sonario" class="logo">
           <?php

            $db = new PDO('mysql:host=localhost;dbname=dbsonario;charset=utf8', 'root', '');
            if(isset($_REQUEST['foo']))
            {
                $select = $db->prepare("SELECT * FROM Sonario WHERE name='".mysql_escape_string($_POST['name'])."' LIMIT 1");
                $select->execute();
                $data = $select->fetch();
                $lat = $data['lat'];
                $long = $data['longit'];
                $radius = $data['radius'];
                
                if(isset($data)){
                    echo '<input type="hidden" name="lat" id="latit" value="'.$lat.'">';
                    echo '<input type="hidden" name="longit" id="longit" value="'.$long.'">';
                    echo '<input type="hidden" name="rad" id="rad" value="'.$radius.'">';
                }
            }
        ?>
    <form>
    <input type="button" value="Start tracking" id="doTimer">

    <audio id="myAudio" controls>
        <!-- <source src="Abstract.ogg" type="audio/ogg"> -->
        <source src="beep.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
</form>

</section>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/mobile.js"></script>
<script src="js/geo.js"></script>
</body>
</html>