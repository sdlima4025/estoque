<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/login.css">
</head>

<body>
    <div class="container">
        <div class="loginarea">
            <form method="POST">
                Seu Número:<br />
                <input type="text" name="number"><br /><br />
    
                Sua Senha:<br />
                <input type="password" name="password"><br /><br />
    
                <input type="submit" value="Entrar">
            </form>
    
            <?php
            if (!empty($msg)) : ?>
    
                <h2><?php echo $msg; ?></h2>
    
            <?php endif; ?>
    
        </div>

    </div>

</body>

</html>