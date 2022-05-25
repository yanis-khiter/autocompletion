<?php
require_once('controller_element.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="./js/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/barre2.css">
    <link rel="stylesheet" href="./css/element.css">
    <title>Détail</title>
</head>
<body>

    <header>

            <a class="nav-link active" aria-current="page" href="index.php"><img class="logo" src="./img/lologo.png" alt="Logo Cities"></a>
            <form  autocomplete="off" action="recherche.php" method="GET">
                <input type="text" name="search" id="fuseau" placeholder="Recherchez vos destinations">
            </form>

    </header>

        <div class="content">
            <div id="sectionUp">  

        </div>
                <div id="sectionDown">

            </div>
                </div>
                    
    <main>

            <div class="haut">

                <h1 class="nomh1"><?php echo $tab[0]['nom']?> <img class="drapeau"src= <?php echo $tab[0]['drapeau'] ?> alt=""></h1> 

                <div class="time">
                    <?php date_default_timezone_set ($tab[0]['time']) ; $pa = date('H:i:s'); echo 'Heure actuelle : '.$pa; ?> 
                </div>

            </div>
  
            <div class="box">

                <h3 class="descri"><?php echo $tab[0]['description'] ?></h3>
                <img class="image"src= <?php echo $tab[0]['image'] ?> alt="">

            </div>
     
    
       
    </main>
</body>
</html>