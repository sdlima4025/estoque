<form method="POST">
    Seu Número:<br/>
    <input type="text" name="number"><br/><br/>

    Sua Senha:<br/>
    <input type="password" name="password"><br/><br/>

    <input type="submit" value="Entrar">
</form>

<?php
if(!empty($msg)): ?>

<h2><?php echo $msg; ?></h2>

<?php endif; ?>