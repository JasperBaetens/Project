<html>
<head>
<link rel="icon" type="image/png" href="img/favicon.png" />
<link rel="stylesheet" href="css/mobile.css">
</head>

<body>
<main>
    <section id="slide-1">
    
           <?php

            $db = new PDO('mysql:host=localhost;dbname=dbsonario;charset=utf8', 'root', '');
            if(isset($_REQUEST['foo']))
            {
                $select = $db->prepare("SELECT * FROM sonario WHERE name='".mysql_escape_string($_POST['name'])."' LIMIT 1");
                $select->execute();
                $data = $select->fetch();
               if($data){
                   
                  echo '<img src="img/LOGO.png" alt="Sonario" class="logo">';
                   $lat = $data['lat'];
                   $long = $data['longit'];
                   $radius = $data['radius'];
                   
                   if(isset($data)){
                    echo '<input type="hidden" name="lat" id="latit" value="'.$lat.'">';
                    echo '<input type="hidden" name="longit" id="longit" value="'.$long.'">';
                    echo '<input type="hidden" name="rad" id="rad" value="'.$radius.'">';
                }
               }else{
                   echo '<div id="non-exist"><h2>Whoops, this sonario does not exist!</h2><a href=Mobile.php>Go Back</a></div>';
               }
               
                
                
            }
        ?>
    <form>

    <audio id="myAudio" controls autoplay>
        <!-- <source src="Abstract.ogg" type="audio/ogg"> -->
        <source src="alarm.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
</form>

</section>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/geo.js"></script>
</body>
</html>