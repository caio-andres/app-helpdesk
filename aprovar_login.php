<?php
    
    session_start();

    $autentica_usuario = false;

    $usuarios_app = array(
        array('email' => 'client@teste.com.br', 'senha' => 'client!'),
        array('email' => 'adm@teste.com.br', 'senha' => 'adm!')
    );

    foreach($usuarios_app as $user) {
        $user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha'] ? $autentica_usuario = true : $autentica_usuario;
    }

    if($autentica_usuario) {
        echo "access granted";
        $_SESSION['autenticado'] = 'SIM';
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=error');
    }



?>