<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato | GN</title>
    <style>
        /* Estilo da barra superior fixa */
        .top-bar {
            position: fixed;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: center;
            background-color: #007bff;
            padding: 10px 0;
            z-index: 1000; /* Garante que a barra fique acima do conteúdo */
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

        /* Estilo do corpo da página */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            padding-top: 60px; /* Adiciona um espaço para a barra fixa */
        }

        .contact-container {
            text-align: center;
        }

        .contact-container h1 {
            font-size: 36px;
            margin-bottom: 30px;
        }

        .contact-links {
            display: flex;
            justify-content: center;
            gap: 50px;
            margin-top: 30px;
        }

        .contact-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
            transition: transform 0.3s ease;
        }

        .contact-item:hover {
            transform: scale(1.1);
        }

        .contact-item i {
            font-size: 70px; /* Aumentado o tamanho dos ícones */
            margin-bottom: 10px;
            transition: transform 0.3s ease;
        }

        .contact-item:hover i {
            transform: scale(1.2);
        }

        .contact-item a {
            font-size: 18px;
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-item a:hover {
            color: #0056b3;
        }

        .contact-item p {
            font-size: 14px;
            color: #666;
            margin-top: 10px;
        }

        /* Cores para os ícones de contato */
        .contact-links .whatsapp {
            color: #25d366;
        }

        .contact-links .instagram {
            color: #c32aa3;
        }

        .contact-links .linkedin {
            color: #0077b5;
        }

        .contact-links .email {
            color: #d44638;
        }
    </style>
</head>
<body>
    <!-- Barra Superior Fixa -->
    <div class="top-bar">
        <a href="home.php">Sobre mim</a>
        <a href="projetos.php">Projetos</a>
        <a href="contato_direto.php">Contato Direto</a>
    </div>

    <!-- Container de Contato -->
    <div class="contact-container">
        <h1>Me Contate</h1>
        <p>Você pode me encontrar nos seguintes canais:</p>

        <div class="contact-links">
            <!-- WhatsApp -->
            <div class="contact-item">
                <a href="https://api.whatsapp.com/send?phone=5555869985022" target="_blank" class="whatsapp">
                    <i class="fab fa-whatsapp"></i>
                    <p>WhatsApp</p>
                </a>
            </div>

            <!-- Instagram -->
            <div class="contact-item">
                <a href="https://www.instagram.com/marcelinopn/" target="_blank" class="instagram">
                    <i class="fab fa-instagram"></i>
                    <p>Instagram</p>
                </a>
            </div>

            <!-- LinkedIn -->
            <div class="contact-item">
                <a href="https://www.linkedin.com" target="_blank" class="linkedin">
                    <i class="fab fa-linkedin"></i>
                    <p>LinkedIn</p>
                </a>
            </div>

            <!-- Email -->
            <div class="contact-item">
                <a href="mailto:marcelinopereira756@Gmail.com" target="_blank" class="email">
                    <i class="fas fa-envelope"></i> <!-- Alterado para o ícone de e-mail -->
                    <p>Email</p>
                </a>
            </div>
        </div>
    </div>
</body>
</html>

