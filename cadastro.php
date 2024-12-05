<?php
if( isset($_POST['submit']))
{
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $genero = $_POST['genero'];

    // Inserir os dados no banco
    $result = mysqli_query($conexao,"INSERT INTO usuario(nome,email,senha,genero) VALUES('$nome','$email','$senha','$genero')");

    // Redirecionar para a página home.php após o cadastro
    if($result){
        header("Location: home.php"); // Redireciona para home.php
        exit; // Sempre chame exit após o header para garantir que o código não continue executando
    } else {
        echo "Erro ao cadastrar usuário.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center; 
            align-items: center; 
            background-image: url('imagens-100317-18-9510-0.jpg'); 
            background-size: cover; 
            background-position: center; 
        }
        .box {
            width: 400px;
            padding: 15px;
            background-color: rgba(255, 255, 255, 0.8); 
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.5s ease;
            border: 2px solid transparent; 
            display: flex;
            flex-direction: column;
        }
        .box:hover {
            border-color: blue; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
            transition: border-color 0.3s ease, box-shadow 0.3s ease; 
        }
        .inputBox {
            position: relative;
            margin-bottom: 5px; 
        }
        .inputUser {
            width: 90%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .labelInput {
            position: absolute;
            top: -10px;
            left: 10px;
            font-size: 12px;
            color: #666;
        }
        fieldset {
            border: 1px solid #ccc;
            padding: 15px;
        }
        legend {
            font-weight: bold;
        }
        input[type="radio"] {
            margin: 5px;
        }
        #submit {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
        }
        #submit:hover {
            background-color: #45a049;
        }
        
        .login-prompt {
            margin-top: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .login-link {
            font-size: 16px;
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
            position: relative;
            padding: 5px 10px;
        }
        .login-link:hover {
            color: white;
            background-color: #007bff;
            border-radius: 4px;
            transition: background-color 0.3s, transform 0.2s ease-in-out;
            transform: scale(1.1); /* Aumenta o tamanho ao passar o mouse */
        }
    </style>
</head>
<body>
    
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br> 
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <p>Gênero:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>

           
            <div class="login-prompt">
                <p>Já possui um login?</p>
                <a href="login.php" class="login-link">Clique aqui para fazer login</a>
            </div>
        </form>
    </div>

</body>
</html>

