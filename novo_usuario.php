<?php

    # novo_usuario.php

?>
<form method="post" action="novo_usuario_gravar.php">
    <div><input type="text" name="user" placeholder="Usuário"></div>
    <div><input type="text" name="nome" placeholder="Nome"></div>
    <div><input type="email" name="email" placeholder="E-mail"></div>
    <div><input type="password" name="pass" placeholder="Senha"></div>
    <div><input type="checkbox" name="admin">ADM</div>
    

    <div><input type="submit" value="Gravar"></div>
</form>