<?php

if(isset($_POST['submit']))
{
    // print_r($_POST['nome']);
    // print_r('<br>');
    // print_r($_POST['cpf']);
    // print_r('<br>');
    // print_r($_POST['email']);
    // print_r('<br>');
    // print_r($_POST['senha']);

    include('agape/config.php');

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO tulis VALUES ('$nome', '$cpf', '$email', '$senha');");

    header('Location: a_cadastrarse_checked.html');

}

?>

<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/AZUU.png">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <script defer src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="module" src="./js/index.js"></script>
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
    <title>CCT</title>
</head>

<body>
    <span id="top"></span>
    <a href="#top" class="top-toggler">
        <i class="fa fa-angle-up"></i>
    </a>
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="_guest.html">
                <img src="./img/azulz.png" alt="Bootstrap" height="90">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="ms-auto d-flex gap-4" role="search">
                    <div>
                        <div>
                            <i class="fa fa-phone me-2"></i>+55 85 9769-5089
                        </div>
                        <div>
                            <a href="mailto:tulipascct@gmail.com"><i class="fa fa-envelope me-2"></i>tulipascct@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav> 
    <main>
    <section id="numbers">
        <div class="container">
                        <div id="cad">      
                        <H1>CADASTRO</H1>             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <main>
    </section>
    <form action="a_cadastrarse.php" method="POST">
   <div class="d-flex p-3 justify-content-center">
    <div class="container text-center">
        <div class="row">
          <div class="col-8 col-sm-6"> NOME <input class="form-control" name="nome" type="text" placeholder="" aria-label="default input example" required></div>
          <div class="col-8 col-sm-6"> CPF <input class="form-control" name="cpf" type="text" placeholder="" aria-label="default input example" required></div>
      

          <div class="w-100 d-none d-md-block"></div>
      
          <div class="col-8 col-sm-6"> EMAIL <input class="form-control" name="email" type="email" placeholder="" aria-label="default input example" required></div>
          <div class="col-8 col-sm-6"> SENHA <input class="form-control" name="senha" type="password" placeholder="" aria-label="default input example" required></div>
        </div>
      </div>
          </div>
        </div>
      </div>
    </div>
</main>
            <div class="text-center mb-5">
                <img src="./img/section-img.png" alt="Separador">
            </div>
<div id="bot" class="d-flex justify-content-center align-items-center">
        <div class="d-flex p-2 justify-content-end">

            <!-- BOTÃO PARA O ALEPHY -->

            <button class="btn btn-primary" type="submit" name="submit"> CADASTRAR </button>
    </div>
</div>
</form>
    </main>
    <br>
    <br>
    <br>

<footer class="p-5">
    <div class="container">
        <div class="row text-white gap-5 gap-md-0">
            <div class="col-12 col-md-4">
                <h1 class="fs-3">Sobre</h1>
                <span class="my-separator is-white mb-3"></span>
                <p>O nosso centro clínico é integrado às redes, explore um pouco!</p>
                <div class="d-flex gap-4">
                    <a class="my-social" href="https://www.facebook.com/share/r8HQrVncEJSm7sRw/?mibextid=qi2Omg"
                        target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    <a class="my-social" href="http://www.linkedin.com/in/tulipas-cct-019470304" target="_blank"><i
                            class="fa-brands fa-linkedin"></i></a>
                    <a class="my-social" href="https://wa.me/5585997695089"><i class="fa-brands fa-whatsapp"></i></a>
                    <a class="my-social" href="https://www.instagram.com/tulipascct/"
                        target="_blank"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <h1 class="fs-3">Atalhos</h1>
                <span class="my-separator is-white mb-3"></span>
                <ul>
                    <li><a class="my-link text-white" href="a_home.php">Cadastro</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-4">
                <h1 class="fs-3">Horários</h1>
                <span class="my-separator is-white mb-3"></span>
                <ul class="time-sidual">
                    <li class="day">Segunda - Sexta <span>08:00 - 16:00</span></li>
                    <li class="day">Sábado <span>13:00 - 17:00</span></li>
                    <li class="day">1º Dia do Mês <span>08:00 - 11:00</span></li>
                    <li class="day">Feriados <span>Sem Atendimentos</span></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</main>
</body>

</html>