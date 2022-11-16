<!DOCTYPE html>
<?php session_start(); ?>

<html lang="en">

<head>

    <link rel="stylesheet" type="text/css" href="css/style-2.css" media="screen" />
    <script src="js/functions.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

</head>

<body>

    <div class="container">

        <div class="box">

            <div class="txtlg">
                <h1>LinkFour</h1>
            </div>
            <div class="txt-2">
                <h3>Cadastre-se para ter uma melhor divulgação de seus Links.</h3>
            </div>

            <form action="controllers/register.php" method="post">

                <div class="fone"><input type="text" name="fone" id="fone" placeholder="Número de Celular"></div>
                <div class="nome"><input type="text" name="nome" id="nome" placeholder="Nome Completo"></div>
                <div class="user"><input type="text" name="usuario" id="usuario" placeholder="Username"></div>
                <div class="senha"><input type="password" name="senha" id="senha" placeholder="Senha"></div>

                <!-- Criar botão de verificação e login JS/PHP -->
                <div class="bt"><button class="bt" type="submit" onclick="cadastro()">Cadastrar-se</button></div>

            </form>

            <div class="txt">
                <h4>Tem uma conta?<a href="http://localhost/linkfour/login.php">Conecte-se</a></h4>
            </div>

        </div>

        <div class="alerts">

            <?php if(@$_SESSION['existing_user'] == true): ?>
                <div class="existing_user">
                    <h3>Usuário existente!</h3>
                </div>
            <?php endif; unset($_SESSION['existing_user']); ?>

            <?php if(@$_SESSION['account_created'] == true): ?>
                <div class="registration_status">
                    <h3>Conta Cadastrada</h3>
                </div>
            <?php endif; unset($_SESSION['account_created']); ?>

            <?php if(@$_SESSION['empty_fields'] == true): ?>
                <div class="registration_status">
                    <h3>Há Campo(s) Vazios!</h3>
                </div>
            <?php endif; unset($_SESSION['empty_fields']); ?>
            
        </div>




    </div>


</body>

</html>


<?php

?>