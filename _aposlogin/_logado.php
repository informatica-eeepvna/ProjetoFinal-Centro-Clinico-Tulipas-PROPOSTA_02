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
            <a class="navbar-brand" href= "_logado.php">
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
                    <div>
                        <a class="btn btn-primary" href="~agendamento.php">Agende sua consulta!</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <br>
    
    <!-- CHAMA PAU! -->
     <section>
    <div style="font-size: 30px; margin-top: 120px; padding-bottom: -300px;" class="d-flex justify-content-center">
    <strong><?php print_r ("Seja bem-vindo(a), " . $logados); ?> </strong>
    </div>
    </section>
    <!-- CHAMA PAU! -->
   
    <main>
        <section id="slider">
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="my-slide p-5" style="background-image:url('img/GENÉRICO.webp');">
                            <div class="text ps-4">
                                <h1 class="title">Cuidando de você da <span>raiz</span> à <span>flor</span></h1>
                                <p>Consultas médicas em diversas especialidades como clínica geral, pediatria,
                                    ginecologia, dermatologia, ortopedia, entre outras</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="my-slide p-5" style="background-image:url('img/AQUIÓ.jpg');">
                            <div class="text ps-4">
                                <h1>Cuidando de você <span>da raiz</span> à <span>flor</span></h1>
                                <p>Exames laboratoriais e de imagem como análises clínicas, ultrassonografia,
                                    radiografia e tomografia computadorizada </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="my-slide p-5" style="background-image:url('img/gengen.jpg');">
                            <div class="text ps-4">
                                <h1>Cuidando de você <span>da raiz</span> à <span>flor</span></h1>
                                <p>Procedimentos de saúde preventiva como vacinação, check-ups médicos e orientação
                                    nutricional. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="my-slide p-5" style="background-image:url('img/gen2gen.jpg');">
                            <div class="text ps-4">
                                <h1>Cuidando de você <span>da raiz</span> à <span>flor</span></h1>
                                <p>Procedimentos de saúde preventiva como vacinação, check-ups médicos e orientação
                                    nutricional. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>
        <section id="cards" class="p-3 p-lg-0">
            <div class="container">
                <div class="row gap-3 gap-lg-0">
                    <div class="col-12 col-lg-4">
                        <div class="my-card">
                            <span>Centro Clínico</span>
                            <i class="fa fa-ambulance"></i>
                            <h1>Redes Sociais</h1>
                            <p>O nosso centro clínico busca forte atividade nas redes sociais, queremos criar um
                                ambiente confortável a todos e estarmos mais pertos de nossos pacientes.</p>
                            <div class="d-flex justify-content-between">
                                <a href="https://www.instagram.com/tulipascct/"
                                    target="_blank"><i class="fa-brands fa-instagram me-1"></i>Instagram</a>
                                <a href="http://www.linkedin.com/in/tulipas-cct-019470304" 
                                    target="_blank"><i class="fa-brands fa-linkedin me-1"></i>LinkedIn</a>
                                <a href="https://www.facebook.com/share/r8HQrVncEJSm7sRw/?mibextid=qi2Omg"
                                    target="_blank"><i class="fa-brands fa-facebook me-1"></i>Facebook</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="my-card">
                            <span>Centro Clínico</span>
                            <i class="fa fa-user-doctor"></i>
                            <h1>Médicos Responsáveis</h1>
                            <p>Profissionais qualificados e especializados em diversas áreas da medicina para
                                atender todos os tiposde clientes e resolver todos os seus problemas.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="my-card">
                            <span>Centro Clínico</span>
                            <i class="fa fa-clock"></i>
                            <h1>Horários de Funcionamento</h1>
                            <ul class="time-sidual">
                                <li class="day">Segunda - Sexta <span>08:00 - 16:00</span></li>
                                <li class="day">Sábado <span>13:00 - 17:00</span></li>
                                <li class="day">1º Dia do Mês <span>08:00 - 11:00</span></li>
                                <li class="day">Feriados <span>Sem Atendimentos</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="care" class="mb-5">
            <div class="text-center mb-5">
                <h1 class="">Cuidamos de você e da sua família</h1>
                <img src="./img/section-img.png" alt="Separador">
            </div>
            <div class="d-flex flex-column align-items-center">
                <div class="my-care">
                    <span>
                        <i class="fa fa-staff-snake"></i>
                    </span>
                    <h1>Atendimento</h1>
                    <p>Contamos com os melhores médicos e farmacêuticos para seu atendimento</p>
                </div>
                <div class="my-care">
                    <span>
                        <i class="fa fa-stethoscope"></i>
                    </span>
                    <h1>Tratamentos</h1>
                    <p>Marque consultas para o momento mais confortável</p>
                </div>
            </div>
        </section>
        <section id="numbers">
            <div class="container">
                <div class="row gap-3 gap-md-0">
                    <div class="col-12 col-md-4">
                        <div class="my-number">
                            <span class="m-0">
                                <i class="fa fa-user-doctor"></i>
                            </span>
                            <div>
                                <h1 class="m-0">22</h1>
                                <p class="m-0">Médicos Cadastrados</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="my-number">
                            <span class="m-0">
                                <i class="fa fa-face-smile"></i>
                            </span>
                            <div>
                                <h1 class="m-0">50000+</h1>
                                <p class="m-0">Pacientes atendidos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="my-number">
                            <span class="m-0">
                                <i class="fa fa-table"></i>
                            </span>
                            <div>
                                <h1 class="m-0">14</h1>
                                <p class="m-0">Anos de Experiência</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="p-5">
            <div>
                <div class="text-center mb-5">
                    <img src="./img/section-img.png" alt="Separador">
                </div>
                <div class="d-flex justify-content-center flex-wrap gap-4">
                    <div style="max-width: 700px;">
                        <h1 class="mb-3">Quem nós somos?</h1>
                        <span class="my-separator mb-3"></span>
                        <p>O nosso centro clínico está em funcionamento há pouco mais de dois mêses e já atendeu um
                            número
                            recorde de pacientes </p>
                        <ul class="mt-5">
                            <li>Nossa equipe de médicos </li>
                            <li>Profissionais qualificados</li>
                            <li>Equipe experiente</li>
                        </ul>
                    </div>
                    <div style="max-width: 700px;">
                        <img class="img-fluid" src="./img/video-bg.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="cta">
            <div class="text-white text-center">
                <h1 class="fs-2 mb-3">Você precisa de um atendimento? Conheça nossos médicos</h1>
                <a class="btn btn-lg btn-primary" href="med.html">Médicos</a>
            </div>
            </main>
            <br>
            <br>
            <div class="text-center mb-5">
                <img src="./img/section-img.png" alt="Separador">
            </div>
            <section class="tit">
            <h1 class="fs-2 mx-auto mb-4 align-items-center d-flex justify-content-center" style="max-width: 700px;">Serviços</h1>
            </section>
            <section class="servic">     
                <div class="row align-items-center">
                    <div class="col">
                       <div class="card" style="width: 18rem;">
                    <img id="med1" class="card-img-top" src="img/medicus.jpg" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">Consultas médicas em diversas especialidades, como a clínica geral, pediatria, ginecologia, dermatologia, ortopedia, etc...</p>
                    </div>
                  </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img id="med2" class="card-img-top" src="img/consulta-medica.webp" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Exames laboratoriais e de imagem, como análises clínicas, ultrassonografia, radiografia e tomografia computadorizada</p>
                            </div>
                          </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img id="med3" class="card-img-top" src="img/medicina-de-familia.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Vacinação, orientação nutricional, fisioterapia, psicotyerapia, terapia ocupacional, fonoaudiologia e tratamentos</p>
                            </div>
                          </div>
                    </div>
                  </div>
            </section>
        </section>
        <section id="portfolio" class="py-5">
            <div class="container text-center">
                <h1 class="fs-2 mx-auto mb-4" style="max-width: 700px;">O Centro Clínico Tulipas já conta com uma
                    grandiosa formação de médicos</h1>
                <img class="mb-4" src="./img/section-img.png" alt="Separador">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <i class="fa fa-table text-secondary"></i>
                        <h1 class="fs-4">Clínica Geral</h1>
                        <p class="text-secondary">Pediatria, ginecologia, dermatologia, ortopedia, etc.</p>
                    </div>
                    <div class="col-12 col-md-4">
                        <i class="fa fa-heart text-secondary"></i>
                        <h1 class="fs-4">Exames Laboratoriais</h1>
                        <p class="text-secondary">Análises clínicas, ultrassonografia, radiografia e tomografia
                            computadorizada</p>
                    </div>
                    <div class="col-12 col-md-4">
                        <i class="fa fa-ear-listen text-secondary"></i>
                        <h1 class="fs-4">Tratamentos Especializados</h1>
                        <p class="text-secondary">Fisioterapia, psicoterapia, terapia ocupacional e fonoaudiologia.</p>
                    </div>
                </div>
            </div>
            </main>
            <br>
            <br>
            <div class="text-center mb-5">
                <img src="./img/section-img.png" alt="Separador">
            </div>
            <section class="d-flex justify-content-center">
                <h1 class="fs-2 mb-3">Contato e Localização</h1>
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

    include('pegape/com_config.php');

    $nome = $_POST['nomed'];
    $email = $_POST['emaild'];
    $coment = $_POST['comentd'];

    $result = mysqli_query($conexao, "INSERT INTO feedback VALUES ('$nome', '$email', '$coment');");

}
?>
            <section class="map d-flex justify-content-center">
                <form action="_logado.php" method="POST">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Nome</label>
                      <input name="nomed" type="text" class="form-control" id="exampleFormControlInput1" placeholder="NOME">
                    </div>
                    <br>
                    <label for="exampleFormControlInput1">Seu endereço de email</label>
                    <input class="form-control" name="emaild" type="email" value="<?php print_r($_SESSION['email']) ?>">
                    <br>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Comentário</label>
                      <textarea class="form-control" name="comentd" id="exampleFormControlTextarea1" rows="3" placeholder="COMENTÁRIO"></textarea>
                      <br>
                      <input class="btn btn-primary" name="submit" type="submit" value="Envie">
                    </div>
                  </form>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15833.031659256721!2d-40.13092867402245!3d-7.211391185131272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x79f5ac0616a1b09%3A0x688498a2a9986b9b!2sEscola%20Estadual%20de%20Educa%C3%A7%C3%A3o%20Profissional%20Valter%20Nunes%20de%20Alencar!5e0!3m2!1spt-BR!2sbr!4v1718117078499!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
        </section>
    </main>
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
                        <li><a class="my-link text-white" href="~agendamento.php">Agendamento</a></li>
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
</body>

</html>