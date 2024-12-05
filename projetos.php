<!DOCTYPE html> 
<html lang="pt-br">
<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | GN</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .top-bar {
            display: flex;
            justify-content: center;
            background-color: #007bff;
            padding: 10px 0;
        }

        .top-bar a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-size: 18px;
        }

        .top-bar a:hover {
            text-decoration: underline;
        }

        .main-container {
            display: flex;
            justify-content: center; /* Alinha os itens no centro */
            align-items: center; /* Alinha verticalmente */
            height: 80vh; /* Define uma altura para a seção */
            padding: 40px;
        }

        .left-side {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-right: 40px;
        }

        .right-side {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-left: 40px;
            text-align: left;
        }

        .profile-image {
            width: 100%; /* Faz a imagem ocupar todo o espaço disponível */
            max-width: 300px; /* Limita a largura máxima da imagem */
            height: auto; /* Mantém a proporção da imagem */
            object-fit: contain; /* Garante que a imagem será totalmente visível sem corte */
            border-radius: 0; /* Remove qualquer borda arredondada */
            border: none; /* Remove qualquer borda */
        }

        .interactive-text {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 500px;
        }

        .interactive-text h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .interactive-text p {
            font-size: 16px;
            color: #666;
        }

        .interactive-text input[type="text"], .interactive-text textarea {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .interactive-text button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .interactive-text button:hover {
            background-color: #0056b3;
        }

        .bottom-bar {
            display: flex;
            justify-content: center;
            background-color: #333;
            padding: 20px 0;
        }

        .bottom-bar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 24px;
        }

        .bottom-bar a:hover {
            color: #007bff;
        }

        .social-icons img {
            width: 30px;
            height: 30px;
            margin: 0 15px;
        }

    </style>
</head>
<body>

    <div class="top-bar">
        <a href="home.php">Sobre mim</a>
        <a href="projetos.php">Projetos</a>
        <a href="contato_direto.php">Contato Direto</a>
    </div>

    <div class="main-container">
        <!-- Área da imagem à esquerda -->
        <div class="left-side">
            <img src="Redes.png" alt="Imagem de Perfil" class="profile-image">
        </div>

        <!-- Coluna de texto interativo à direita -->
        <div class="right-side">
            <div class="interactive-text">
                <h2>Redes</h2>
                <p>Nesse momento, começamos a estudar a área de redes, onde aprendi como funciona um sistema HTTP/SSH e como ocorre a conexão entre o roteador, o gateway, o banco de dados e o computador, o que me melhorou e despertou em mim um gosto por redes, que talvez me leve a voltar a estudar mais sobre o assunto no futuro</p>
            </div>
        </div>
    </div>

    <div class="main-container">
        <!-- Área da imagem à esquerda -->
        <div class="left-side">
            <img src="Spotify.png" alt="Imagem de Perfil" class="profile-image">
        </div>

        <!-- Coluna de texto interativo à direita -->
        <div class="right-side">
            <div class="interactive-text">
                <h2>Flatte Spotify</h2>
                <p>Durante nosso breve momento com o professor Alissor, ele nos ensinou sobre o Flutter, que é um código de programação que oferece uma maneira mais responsiva e fácil para a criação de sites, integrando as partes de backend e frontend</p>
            </div>
        </div>
    </div>

    <div class="main-container">
        <!-- Área da imagem à esquerda -->
        <div class="left-side">
            <img src="Conectmed.png" alt="Imagem de Perfil" class="profile-image">
        </div>

        <!-- Coluna de texto interativo à direita -->
        <div class="right-side">
            <div class="interactive-text">
                <h2>Conect Med</h2>
                <p>Durante os últimos anos, eu e meu grupo começamos a testar e apresentar os projetos, sendo um deles um site de consulta, para melhorar a maneira de realizar as consultas, além de desenvolver o banco de dados e testar em Flutter.</p>
            </div>
        </div>
    </div>


    <div class="bottom-bar">
        <a href="https://www.instagram.com/marcelinopn/" target="_blank" class="social-icons">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="https://github.com" target="_blank" class="social-icons">
            <i class="fab fa-github"></i>
        </a>
        <a href="https://www.linkedin.com" target="_blank" class="social-icons">
            <i class="fab fa-linkedin"></i>
        </a>
    </div>
</body>
</html>
