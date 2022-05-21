<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="./css/index.css"></script>
    <script type="text/javascript" src="./js/style.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="./css/index.css">
    <title>Autocompletion</title>
</head>

<body>

    <header>

                    <img class="logo" src="./img/logo.png" alt="Logo Cities">
                    <h1> CAPITALES</h1>
                    <li><a class="todo" href="recherche.php?search=">Toutes vos capitales</a></li>

    </header>


    <form autocomplete="off" action="recherche.php" method="GET">
        <div class="close-btn">
            <span class="fas fa-times"></span>
        </div>
        <div class="wrapper">
            <div class="search-btn">
                <span class="fas fa-search"></span>
            </div>
            <div class="search-data">
                <input type="text" name="search" id="fuseau" placeholder="Recherchez votre capitale">
                <div class="line"></div>
                <span class="fas fa-search"></span>
                <div id="sectionUp"></div>
                <div class="line2"></div>
                <div id="sectionDown"></div>
            </div>

    </form>
</body>

</html>