<?php
    # novo_usuario_gravar.php 
    require('pdo.inc.php');

    $user = $_POST['user'] ?? false;
    $pass = $_POST['pass'] ?? false;
    $nome = $_POST['nome'] ?? false;
    $email = $_POST['email'] ?? false;
 

    if(!$user || !$pass || !$nome || !$email){
        header('location: novo_usuario.php');
        die;
    }
    

    $pass = password_hash($pass, PASSWORD_BCRYPT);

    $sql = $pdo->prepare('INSERT INTO usuarios (username, senha, nome, email) VALUES (:user, :pass, :nome, :email)');

    $sql->bindParam(':user', $user);
    $sql->bindParam(':pass', $pass);
    $sql->bindParam(':nome', $nome);
    $sql->bindParam(':email', $email);


    $sql->execute();
