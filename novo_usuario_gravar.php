<?php
    # novo_usuario_gravar.php 
    require('pdo.inc.php');

    $user = $_POST['user'] ?? false;
    $pass = $_POST['pass'] ?? false;
    $nome = $_POST['nome'] ?? false;
    $email = $_POST['email'] ?? false;
 

    if(!$user || !$pass){
        header('location: novo_usuario.php');
        die;
    }
    

    $pass = password_hash($pass, PASSWORD_BCRYPT);

    $sql = $pdo->prepare('INSERT INTO usuarios (username, senha, nome, email, admin, ativo) VALUES (:user, :pass, :nome, :email, 0, 1)');

    $sql->bindParam(':user', $user);
    $sql->bindParam(':pass', $pass);
    $sql->bindParam(':nome', $nome);
    $sql->bindParam(':email', $email);
    //$sql->bindParam(':admin', $admin);


    $sql->execute();
