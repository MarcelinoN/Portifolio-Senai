<?php
session_start();
//print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    } 
    $logado = $_SESSION['email'];
?>

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
            flex-direction: column;
            align-items: center;
            padding: 40px;
            text-align: center;
        }

        .box {
            width: 80%;
            max-width: 1200px;
            padding: 20px;
            margin-bottom: 40px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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

        
        .profile-image {
            width: 150px; 
            height: 150px; 
            object-fit: cover; 
            border-radius: 50%; 
            margin-bottom: 20px; 
            border: 5px solid #007bff;
        }
        
        /* Modificação para os links de logout */
        .logout-link {
            color: white; /* Cor igual aos outros links */
            text-decoration: none;
            font-size: 18px;
            margin: 10px;
            padding: 10px;
            background-color: #007bff; /* Azul, para combinar com os outros links */
            border: 1px solid #007bff;
            border-radius: 5px;
        }

        .logout-link:hover {
            background-color: #0056b3; /* Cor de fundo mais escura ao passar o mouse */
            color: white;
        }

    </style>
</head>
<body>

    <div class="top-bar">
        <a href="home.php">Sobre mim</a>
        <a href="projetos.php">Projetos</a>
        <a href="contato_direto.php">Contato Direto</a>
        <!-- Link de Logout com cor ajustada -->
        <a href="logout.php" class="logout-link">Logout</a>
    </div>

    <div class="main-container">
       
        <img src="Foto portifolio.jpg" alt="Minha Foto" class="profile-image">

        <div class="box">
            <h1>Bem-vindo ao meu portifolio!</h1>
            <p>Ao longo do meu curso, tive a oportunidade de desenvolver uma gama de competências essenciais que não apenas ampliaram meus conhecimentos técnicos, mas também me prepararam para enfrentar os desafios do mercado de trabalho de forma mais eficiente e inovadora. A jornada foi intensa, mas extremamente enriquecedora, e agora, ao concluir esta etapa, sinto-me mais confiante em minha capacidade de atuar em diversas áreas da tecnologia.</p>
            <p>Iniciei o curso com uma introdução ao Java Básico, onde pude compreender os conceitos fundamentais da programação orientada a objetos, aprendendo a criar estruturas simples e eficientes para resolver problemas cotidianos. Com o tempo, fui aprimorando minhas habilidades, criando algoritmos e programas que simularam funções do mundo real, o que me ajudou a desenvolver uma base sólida para aprender outras linguagens e tecnologias.</p>
            <br>
            <p>Em paralelo, tive a oportunidade de estudar Redes de Computadores, um campo fascinante que me ensinou como a comunicação entre dispositivos ocorre, desde a configuração de redes locais até a compreensão de protocolos importantes como TCP/IP e HTTP. Esse conhecimento se tornou essencial para que eu pudesse entender o funcionamento de sistemas distribuídos e garantir a integração entre as tecnologias.</p>
            <br>
            <p>Um dos aspectos mais empolgantes do curso foi o aprendizado com o Arduino, onde tive a chance de trabalhar com eletrônica e programação de dispositivos físicos. O Arduino me permitiu explorar o mundo da automação, criando projetos como sistemas de controle de temperatura, acendimento de LEDs e até dispositivos interativos, o que expandiu minha visão sobre a interação entre software e hardware.</p>
            <br>
            <p>No campo da desenvolvimento de aplicativos móveis, aprendi Flutter, uma das ferramentas mais modernas para o desenvolvimento de aplicativos nativos para Android e iOS. Essa habilidade me permitiu criar interfaces de usuário dinâmicas e responsivas, aplicando conceitos de design e usabilidade em projetos reais.</p>
            <br>
            <p>Em relação ao uso de ferramentas de produtividade, pude aprimorar meus conhecimentos no Pacote Office em nível intermediário. Dominei recursos essenciais como criação de planilhas avançadas no Excel, elaboração de apresentações profissionais no PowerPoint e elaboração de documentos no Word. Essas habilidades são fundamentais para organizar, analisar e apresentar dados de maneira clara e eficaz, algo crucial tanto no contexto acadêmico quanto no profissional.</p>
            <br>
            <p>Outro ponto importante foi a formação em Banco de Dados, onde aprendi a estruturar e gerenciar grandes volumes de informações de maneira eficiente. Estudei conceitos de bancos relacionais como MySQL, aprendendo a criar tabelas, realizar consultas e garantir a integridade dos dados, habilidades que são essenciais para o desenvolvimento de sistemas escaláveis.</p>
            <br>
            <p>No campo do desenvolvimento web, fui introduzido ao HTML, tanto para construção de páginas front-end quanto para o entendimento da arquitetura de websites. Aprendi a criar layouts responsivos e interativos, garantindo a experiência do usuário de forma intuitiva e fluída. Além disso, aprofundei-me no Back-End, onde estudei como conectar servidores a bancos de dados, criar APIs e lidar com a lógica de negócios, criando uma base sólida para desenvolver sistemas web completos e eficientes.</p>
            <br>
            <p>Hoje, ao concluir meu curso, vejo que o aprendizado que adquiri não só me prepara para ingressar no mercado de trabalho, mas também me dá a confiança de que posso continuar a evoluir. Estou ansioso para aplicar essas competências em projetos reais, contribuindo para a inovação e o crescimento da área de tecnologia, com foco em desenvolvimento de software, redes e automação.</p>
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
