<?php

include_once('conexao.php');

?>
<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro Prefeitura</title>
    <style>
        body{

            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            color: black;
            .box{
                position:absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: rgba(0, 0, 0, 0.8);
                padding: 30px;
                border-radius: 15px;
            
            }
            a{
             text-decoration: none;
        color: white;
        border: 3px solid dodgerblue;
        border-radius: 10px;
        padding: 10px;
     }
     a:hover{
        background-color: dodgerblue;
     }
       }
       body{font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(45deg, rgb(0, 0, 0, 8), rgb(0, 0, 0, 0));
        
        }
    

   </style>
</head>
<body>
<h1>DESAFIO DE DESENVOLVIMENTO</h1>
<h2>Obrigado pela atenção!!!</h2>
<div class="box">
    <a href="login.php">Login</a>
    <a href="formulario.php">Cadastre-se</a>

</div>
</body>
</html>