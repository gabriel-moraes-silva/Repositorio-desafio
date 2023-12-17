<?php

include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, rgb(0, 0, 0, 8), rgb(0, 0, 0, 0));
        }

    div{

        background-color: rgba(0, 0, 0, 0.8);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 70px;
        border-radius: 15px;
        color: white;
    }
    input{
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;
    }
    button{
        background-color: dodgerblue;
        border: none;
        padding: 15px;
        width: 100%;
        border-radius: 10px;
        color: white;
        font-size: 15px;
    }
    button:hover{
        background-color: blue;
        cursor: pointer;
    }

    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="" method="POST">
            <input type="text" name="email" placeholder="Email">
         <br><br>
            <input type="password" name="senha" placeholder="Senha">
         <br><br>
         <button>Entra</botton>


        </form>
    </div>
</body>
</html>