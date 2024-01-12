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
            <div class="screen">
                <div class="screen__content">
                    <div class="screen__background">
                        <div class="screen__background__shape1">

                            <form method="POST">
                                Seu Número:<br />
                                <input type="text" name="number" required><br /><br />
                    
                                Sua Senha:<br />
                                <input type="password" name="password" require><br /><br />
                    
                                <button class="button login__submit">
                                    <span class="button__text">Log In Now</span>
                                    <i class="button__icon fas fa-chevron-right"></i>
                                </button>		
                                <!-- <input type="submit" value="Entrar"> -->
                            </form>
                    
                            <?php
                            if (!empty($msg)) : ?>
                    
                                <h2><?php echo $msg; ?></h2>
                    
                            <?php endif; ?>
                        </div>

                    </div>  

                </div>
            </div>
    
        </div>

    </div>

</body>

</html>