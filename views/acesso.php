<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Acesso</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../assets/css/estilo.css">
</head>

<body>
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark border-0 rounded-0">
            <div class="custom-shape-divider-top-1666326500">
              <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
              </svg>
            </div>
            <div class="card-body p-5 text-center">
              <div class="mb-md-5 mt-md-4 pb-5">
                <img src="../assets/img/new-php-logo.svg" alt="" class="img-fluid mx-auto d-block" width="150px" height="auto" />
                <p class="text-white-50 mb-5">
                  Entre com seu login e senha!
                </p>
                <form method="POST" action="valida_login.php">
                  <div class="form-floating mb-3">
                    <input type="text" name="login" class="form-control" id="floatingInput" placeholder="seulogin" />
                    <label for="floatingInput">Login</label>
                  </div>
                  <div class="form-floating">
                    <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Senha" />
                    <label for="floatingPassword">Senha</label>
                  </div>
                  <p class="small mb-3">
                    <a class="text-white-50" href="#">Esqueceu sua senha?</a>
                  </p>
                  <button class="btn btn-primary btn-lg px-5" type="submit">
                    Acessar
                  </button>
                </form>
                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                  <div class="mx-auto">
                    <a class="btn btn-primary mx-2 bi bi-instagram border-1 border-danger" href="https://www.instagram.com/" target="_blank"></a>
                    <a class="btn btn-primary mx-2 bi bi-facebook border-1 border-danger rounded" href="https://www.facebook.com/" target="_blank"></a>
                    <a class="btn btn-primary mx-2 bi bi-whatsapp border-1 border-danger" href="https://wa.me/" target="_blank"></a>
                    <a class="btn btn-primary mx-2 bi bi-linkedin border-1 border-danger" href="https://www.linkedin.com/" target="_blank"></a>
                  </div>
                </div>
              </div>
              <div>
                <p class="mb-0 text-white">
                  Não possui cadastro?
                  <a href="#" class="text-white-50 fw-bold">Cadastre-se</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>