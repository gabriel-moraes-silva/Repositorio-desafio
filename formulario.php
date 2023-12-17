<?php

if(isset($mysqli)) 
if(isset($_POST['submit']))
{
    print_r('Nome: ' . $_POST['nome']);
    print_r('<br>');
    print_r('Email: ' . $_POST['email']);
    print_r('<br>');
    print_r('Telefone: ' . $_POST['telefone']);
    print_r('<br>');
    print_r('cpf: ' . $_POST['cpf']);
    print_r('<br>');
    print_r('Genero: ' . $_POST['genero']);
    print_r('<br>');
    print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
    print_r('<br>');
    print_r('Cidade: ' . $_POST['cidade']);
    print_r('<br>');
    print_r('Bairro: ' . $_POST['bairro']);
    print_r('<br>');
    print_r('Rua: ' . $_POST['rua']);
    print_r('<br>');
    print_r('Complemento: ' . $_POST['complemento']);

    include_once('conexao.php');

    $nome = $_POST['nome'];
    $email =  $_POST['email'];
    $senha =  $_POST['senha'];
    $telefone = $_POST['telefone'];
    $cpf =  $_POST['cpf']; 
    $sexo = $_POST['sexo'];
    $data_nascimento =  $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
    $complemento = $_POST['complemento'];

    $_RESULT = mysqli_query($mysqli, "INSERT INTO usuarios(nome,email,senha,telefone,cpf,sexo,data_nascimento,cidade,bairro,rua,complemento) 
    VALUES ('$nome','$email','$senha','$telefone','$cpf,'$sexo','$data_nascimento','$cidade','$bairro','$rua','$complemento')");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Formulario - Cadastrar</title>
    <style>
        body{font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, rgb(0, 0, 0, 8), rgb(0, 0, 0, 0));
        
        }
        .box{
            position:absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            width: 30%;
            border-radius: 10px;
        
        }
        fieldset{
            border: 3px solid white;
        }
        legend{
            border: 1px solid white;
            padding: 10px;
            text-align: center;
            background-color: white;
            border-radius: 8px;
            color: black;
        }
        .inputbox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(0,92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }


    </style>
</head>
<body>
<a href="home.php">Voltar</a>

<div class="box">
    <form action="formulario.php" method="POST"> 
        <fieldset>
            <legend>Fórmulario de cadastro</legend>
            <style>
                .box{color: white;}
                
            </style>
            <br>
    <div class="inputBox">
    <input type="text" name="nome" id="nome" class="inputUser" required>
    <label for="nome" class="labelInput">Nome completo</label>
    </div>

    <div class="inputBox">
    <br>
    <input type="email" name="email" id="email" class="inputUser" required>
    <label for="email" class="labelInput">E-mail</label>
    </div>

    <div class="inputBox">
    <br>
    <input type="password" name="senha" id="senha" class="inputUser" required>
    <label for="senha" class="labelInput">Senha</label>
    </div>

    <div class="inputBox">
    <br>
    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
    <label for="telefone" class="labelInput">telefone</label>
    </div>

    <div class="inputBox">
    <br>
    <input type="text" name="cpf" id="cpf" class="inputUser" required>
    <label for="cpf" class="labelInput">cpf</label>
    </div>

    <p>sexo:</p>
    <input type="radio" id="feminino" name="genero" value="feminino" required>
    <label for="feminino">feminino</label>

    <input type="radio" id="masculino" name="genero" value="masculino" required>
    <label for="masculino">Masculino</label>

    <input type="radio" id="outro" name="genero" value="outro" required>
    <label for="outro">Outro</label>
    <br><br>
    <label for="data_nascimento">Data de nascimento:</label>
    <input type="date" name="data_nascimento" id="data_nascimento" required>

    <div class="inputBox">
    <br>
    <input type="text" name="cidade" id="cidade" class="inputUser" required>
    <label for="cidade" class="labelInput">Cidade</label>
    </div>

    <div class="inputBox">
    <br>
    <input type="text" name="bairro" id="bairro" class="inputUser" required>
    <label for="bairro" class="labelInput">Bairro</label>
    </div>

    <div class="inputBox">
    <br>
    <input type="text" name="rua" id="rua" class="inputUser" required>
    <label for="rua" class="labelInput">Rua</label>
    </div>

    <div class="inputBox">
    <br>
    <input type="text" name="complemento" id="complemento" class="inputUser" required>
    <label for="complemento" class="labelInput">Complemento</label>
    </div>
    <br><br>
    <input type="submit" name=submit id="submit">
        </fieldset>
    </form>
</div>
</body>
</html>