<!DOCTYPE html>

<html lang="en">

<head>
    <?php $user = @$_GET['user'] //?user=rodrick 
    ?>

    <?php if ($user == null) {
        echo '<link rel="stylesheet" type="text/css" href="css/style-4.css" media="screen" />';
    } else {
        echo '<link rel="stylesheet" type="text/css" href="../css/style-4.css" media="screen" />';
    }
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo "User: " . $user; ?></title>

</head>

<body>


    <?php

    $servername = "localhost";
    $database = "linkfour";
    $password = "";
    $username = "root";

    $conn = mysqli_connect($servername, $username, $password, $database);

    $db = mysqli_select_db($conn, "linkfour");

    $query = "select icon, link, usuario from customize where usuario='{$user}'";
    $result = mysqli_query($conn, $query);

    var_dump($result)
    ?>

    <div class="container">

        <div class="logo">
            <h2>LinkFour</h2>
        </div>

        <?php if ($user == null) { 
            echo '<div class="alert"><h3> Nenhuma conta identificada!!!</h3></div>';
        } ?>

        <?php
        while ($row = $result->fetch_array()) {

            switch ($row['icon']) {
                case '1':
                    $icon = "../imgs/facebook.svg";
                    break;
                case '2':
                    $icon = "../imgs/linkedin.svg";
                    break;
                case '3':
                    $icon = "../imgs/github.svg";
                    break;
                case '4':
                    $icon = "../imgs/instagram.svg";
                    break;
                case '5':
                    $icon = "../imgs/twitter.svg";
                    break;
                case '6':
                    $icon = "../imgs/reddit.svg";
                    break;
                case '7':
                    $icon = "../imgs/globe.svg";
                    break;
            }

        ?>

            <div class="box">

                <div class="icon">
                    <img src="<?= $icon ?>" alt="">
                </div>


                <div class="link">
                    <a href="<?= $row['link'] ?> "> <button><?= $row['link'] ?></button>
                    </a>
                </div>
            </div>
    
<?php } ?>
</div>


</body>

</html>