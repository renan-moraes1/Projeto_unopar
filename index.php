<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./assets/css/estilo.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark fixed-top">
    <div class="container mx-auto">
      <a class="navbar-brand text-white" href="#"><img src="./assets/img/new-php-logo.svg" alt="" class="img-fluid mx-auto d-block" width="100px" height="auto" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="bi bi-three-dots text-white"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-link">
            <a class="text-decoration-none bi bi-telephone" href="tel:5549998321887" target="_blank">
              Fone</a>
          </li>
          <li class="nav-link">
            <a class="text-decoration-none bi bi-whatsapp" href="https://wa.me/5549998321887" target="_blank">
              WhatsApp</a>
          </li>
        </ul>
        <a class="btn btn-primary bi bi-person" href="./views/acesso.php">Acessar</a>
      </div>
    </div>
  </nav>
  <header class="header py-5 mt-0 mt-md-3" style="background-image: url('../assets/header.png')">
    <div class="container py-0 py-md-5 h-100">
      <div class="row flex-md-row-reverse row-cols-1 row-cols-md-2 py-5 d-flex align-items-center">
        <div class="col">
          <img src="./assets/img/new-php-logo.svg" alt="" class="img-fluid mx-auto d-block rounded-3" />
        </div>
        <div class="col text-center text-md-start pt-3 pt-md-5 pt-md-0">
          <h1 class="display-1 lh-1 fw-bold">
            Desenvolva <br />seu website com <span class="grad">PHP</span>.
          </h1>
          <p class="fw-bold">
            De forma <span class="grad">simples</span> e <span class="grad">prática</span>.
          </p>
          <a class="btn btn-primary btn-lg" href="#seuSite">Saber mais</a>
          <h5 class="text-center my-3">Siga-nos em nossas mídias sociais!</h5>
          <div class="mx-auto text-center">
            <a class="btn bi bi-instagram text-decoration-none" href="https://www.instagram.com/" target="_blank"></a>
            <a class="btn bi bi-facebook text-decoration-none" href="https://www.facebook.com/" target="_blank"></a>
            <a class="btn bi bi-whatsapp text-decoration-none" href="https://wa.me/" target="_blank"></a>
            <a class="btn bi bi-linkedin text-decoration-none" href="https://www.linkedin.com/" target="_blank"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="custom-shape-divider-top-1666359274">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
      </svg>
    </div>
  </header>

  <section class="bg-light" id="seuSite">
    <div class="container py-5">
      <div class="row row-cols-1 row-cols-md-2 py-5 d-flex align-items-center">
        <div class="col my-5">
          <img src="./assets/img/new-php-logo.svg" alt="" class="img-fluid mx-auto d-block rounded-3" />
        </div>
        <div class="col text-center text-md-end">
          <h2 class="display-6 fw-bold">
            Desenvolvemos seu <span class="grad">website!</span>
          </h2>
          <p class="text-small">Atualizamos seu site também!</p>
          <a class="btn btn-primary btn-sm" href="#tecnologias">Saber mais</a>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-vermelho" id="tecnologias">
    <div class="custom-shape-divider-top-1666361652">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M741,116.23C291,117.43,0,27.57,0,6V120H1200V6C1200,27.93,1186.4,119.83,741,116.23Z" class="shape-fill"></path>
      </svg>
    </div>
    <div class="container py-5">
      <div class="row row-cols-1 row-cols-md-3 py-5 d-flex align-items-center">
        <div class="col text-center my-5 my-md-0">
          <span class="bi bi-bootstrap" style="font-size: 4rem"></span>
          <h3 class="display-3 fw-bold">Bootstrap</h3>
          <h5 class="display-6 fw-bold">Framework</h5>
          <p class="">balbla alalblablal blalbalbalbla ablalbalbla.</p>
        </div>
        <div class="col text-center my-5 my-md-0">
          <span class="bi bi-filetype-php" style="font-size: 4rem"></span>
          <h3 class="display-3 fw-bold">PHP</h3>
          <h5 class="display-6 fw-bold">Linguagem</h5>
          <p class="">balbla alalblablal blalbalbalbla ablalbalbla.</p>
        </div>
        <div class="col text-center my-5 my-md-0">
          <span class="bi bi-filetype-sql" style="font-size: 4rem"></span>
          <h3 class="display-3 fw-bold">SQL</h3>
          <h5 class="display-6 fw-bold">Banco de dados</h5>
          <p class="">balbla alalblablal blalbalbalbla ablalbalbla.</p>
        </div>
      </div>
    </div>
  </section>
  <div class="custom-shape-divider-top-1666326500">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
      <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
      <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
    </svg>
  </div>
  <footer class="footer bg-dark text-white" id="contatos">
    <div class="container-fluid">
      <div class="row row-cols-1 row-cols-md-2 text-center py-4 bg-light">
        <div class="col">
          <img src="./assets/img/new-php-logo.svg" alt="" class="img-fluid mx-auto d-block" width="100px" height="auto" />
        </div>
        <div class="col d-flex align-items-center justify-content-center">
          <span class="text-muted mb-md-0">Desenvolvido por Renan Moraes.</span>
        </div>
      </div>
    </div>
    <div class="container-fluid py-1 linhagrad"></div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>