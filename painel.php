<?php

include('protect.php');



if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Acesso-ADM</title>
</head>

<style>
    .h3{
        color: '#4d8896';
    }

    .btnText{
        background: #4D8896;
        color: white;
        border: 3px solid white;
    }

    .btnText:hover{
        background: #014152;
        color: white;
        border: 3px solid white;
    }

    .btnImg{
        background: #4D8896;
        color: white;
        border: 3px solid white;
    }

    .btnImg:hover{
        background: #014152;
        color: white;
        border: 3px solid white;
    }

    .sair{
        background: #4D8896;
        color: white;
        width: 300px;
        
    }

    .sair:hover{
        background: #014152;
        color: white;
        
        
    }

    .hlogo{
        width: 200px;
    }
</style>
    
<body>
<a href='index.php' button class='btn btn-success'>VOLTAR</button></a>
</body>
                    
</html>