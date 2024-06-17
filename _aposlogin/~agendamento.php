<?php

session_start();
// print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senhal']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senhal']);
    header('Location: /ofctulipas/frontend/_prelogin/a_loguinho.php');
}
$logados = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
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
            <a class="navbar-brand" href="_logado.php">
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
                        <H1 id="grossin">AGENDAMENTO</H1>       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <main>
    </section>

<?php
if(isset($_POST['submit']))
{

    // print_r($_POST['nomed']);
    // print_r('<br>');
    // print_r($_POST['emaild']);
    // print_r('<br>');
    // print_r($_POST['comentd']);
    // print_r('<br>');

    include('pegape/age_config.php');

    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $medico = $_POST['medico'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];
    $email = $_POST['email'];

    $result = mysqli_query($conexao, "INSERT INTO consultas VALUES ('$nome', '$categoria', '$medico', '$data', '$horario', '$email');");

    header('Location: ~agendamento_check.html');

}
?>

    <form action="~agendamento.php" method="POST">
    <div class="container text-center">
        <div class="row">
          <div class="col-8 col-sm-6">
            <input name="nome" type="text" class="form-control" placeholder="Nome" aria-label="First name" required>
        </div>
          <div class="col-4 col-sm-6">
            <select class="form-select" name="categoria" aria-label="Default select example" required>
            <option selected>Selecione a categoria</option>
            <option value="Cardiologia">Cardiologia </option>
            <option value="Dermatologia">Dermatologia </option>
            <option value="Ginecologia">Ginecologia </option>
            <option value="Ortopedia">Ortopedia </option>
            <option value="Anestesiologia">Anestesiologia </option>
            <option value="Pediatria">Pediatria </option>]
            <option value="Oftalmologia">Oftalmologia </option>
            <option value="Psiquiatria">Psiquiatria </option>
            <option value="Urologia">Urologia </option>
            <option value="Oncologia">Oncologia </option>
            <option value="Endocrinologia">Endocrinologia </option>
            <option value="Neurologia">Neurologia </option>
            <option value="Hematologia">Hematologia </option>
            <option value="Estética">Estética </option>
            <option value="Biomedicina">Biomedicina </option>
          </select> 
        </div>
        <div id="traso" class="d-flex justify-content-center">
            ---
        </div>
          <div class="w-100"></div>
      
          <div class="col-8 col-sm-6">
            <select class="form-select" name="medico" aria-label="Default select example">
            <option selected>Médicos</option>
            <option value="Dr Henrique">Dr Henrique </option>
            <option value="Dra. Lys">Dra. Lys </option>
            <option value="Dr. Nunes">Dr. Nunes </option>
            <option value="Dr. Nogueira">Dr. Nogueira </option>
            <option value="Dra. Andrade">Dra. Andrade </option>
            <option value="Dr. Danilo">Dr. Danilo </option>
        </select> 
    </div>
        <div class="col-4 col-sm-6"><input name="data" type="date" class="form-control" placeholder="data" aria-label="First name" required></div>

<div id="traso" class="d-flex justify-content-center">
    ---
</div>
        <div class="w-100"></div>
      
          <div class="col-8 col-sm-6">
            <select class="form-select" name="horario" aria-label="Default select example">
                <option selected>Horários Disponíveis</option>
                <option value="Manhã">08:00 - 10:00</option>
                <option value="Meio do dia">11:00 - 13:00</option>
                <option value="Tarde">14:00 - 16:00</option>
        </select> 
    </div>
          <div class="col-4 col-sm-6"><input name="email" type="email" class="form-control" value="<?php print_r($_SESSION['email']) ?>" aria-label="First name" required> 
        </div>
</main>
<div id="traso" class="d-flex justify-content-center">
    ---
</div>
<br>
<div id="bot" class="d-flex justify-content-center align-items-center">
        <div class="d-flex p-2 justify-content-end">
            <button class="btn btn-primary" name="submit" type="submit"> AGENDAR CONSULTA </button>
    </div>
    </div>
    </div>
    </div>
    </main>
</form>
<br>
<br>
    <section class="services">

    </section>
        </div>
      </div>
        </div>
    </div>
    </div>
</main>
<section>
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
                    <li><a class="my-link text-white" href="~agendamento.php">Agende sua consulta!</a></li>
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
</section>
</main>
</body>
</html>
