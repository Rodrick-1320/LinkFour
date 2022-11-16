<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>

    <link rel="stylesheet" type="text/css" href="css/style-3.css" media="screen" />
    <script src="js/functions.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom</title>

</head>

<body>
    <div class="container">

        <div class="box">

            <div class="txtlg">
                <h1>LinkFour</h1>
            </div>

            <form action="controllers/customize.php" method="post">

                <div class="insert">

                    <div class="radio">

                        <input type="radio" name="imagem" id="i1" value="1">
                        <label for="i1"><img src="imgs/facebook.svg" alt=""></label>

                        <input type="radio" name="imagem" id="i2" value="2">
                        <label for="i2"><img src="imgs/linkedin.svg" alt=""></label>

                        <input type="radio" name="imagem" id="i3" value="3">
                        <label for="i3"><img src="imgs/github.svg" alt=""></label>

                        <input type="radio" name="imagem" id="i4" value="4">
                        <label for="i4"><img src="imgs/instagram.svg" alt=""></label>

                        <input type="radio" name="imagem" id="i5" value="5">
                        <label for="i5"><img src="imgs/twitter.svg" alt=""></label>

                        <input type="radio" name="imagem" id="i6" value="6">
                        <label for="i6"><img src="imgs/reddit.svg" alt=""></label>

                        <input type="radio" name="imagem" id="i7" value="7">
                        <label for="i7"><img src="imgs/globe.svg" alt=""></label>

                    </div>

                    <input type="hidden" name="username" value="">

                    <div class="link"> <label>Link desejado: </b><input type="url" name="link" id="link"> </div>

                    <div class="bt"><button type="submit" onclick="">Adicionar</button></div>


                </div>

            </form>

        </div>

        <div class="alerts">

            <?php if (@$_SESSION['empty_fields'] == true) : ?>
                <div class="existing_user">
                    <h3>Há Campo(s) Vazios!</h3>
                </div>
            <?php endif;
            unset($_SESSION['empty_fields']); ?>

            <?php if (@$_SESSION['added_data'] == true) : ?>
                <div class="registration_status">
                    <h3>link adicionado com sucesso!!!</h3>
                </div>
            <?php endif;
            unset($_SESSION['added_data']); ?>

        </div>

        <div class="bttn">
            <button><a href="controllers/logout.php" onclick="logout()">Sair</a></button>
        </div>

    </div>
</body>

</html>

<?php
include('functions/check_login.php');
?>