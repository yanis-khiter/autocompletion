<?php
require_once('controller_recherche.php');

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
    <link rel="stylesheet" href="./css/recherche.css">
    <title>Recherche</title>
</head>

<body>

    <header>
            
            <a class="nav-link active" aria-current="page" href="index.php"><img class="logo" src="./img/logo.png" alt="Logo Cities"></a>
            <form  autocomplete="off" action="recherche.php" method="GET">
                <input type="text" name="search" id="fuseau" placeholder="Rechercher votre capitale">
            </form>

    </header>

    <main>

        <div class="content">
            <div id="sectionUp">
            </div>
            <div id="sectionDown">
            </div>
        </div>
        <table class="table table-borderless">
            <tbody>
                <?php
                foreach ($tab['start'] as $st) {  ?>
                    <tr>
                        <td><a href="element.php?id=<?php echo $st['id'] ?> "><img src="<?= $st['image']; ?>" width="200px" height="150px"></a></td>
                        <td class="nom"><?= $st['nom']; ?></td>
                        <td><?= $st['description']; ?></td>
                    </tr>
                <?php };
                ?>
                <?php
                foreach ($tab['contain'] as $st) {  ?>
                    <tr>
                        <td><a href="element.php?id=<?php echo $st['id'] ?> "><img src="<?= $st['image']; ?>" width="200px" height="150px"></a></td>
                        <td><?= $st['nom']; ?></td>
                        <td><?= $st['description']; ?></td>
                    </tr>
                <?php };
                ?>


            </tbody>
        </table>
    </main>


</body>

</html>