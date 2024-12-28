<!doctype html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/js/bootstrap/css/bootstrap.min.css">

      <!-- CSS DA APLICAO -->
    <link rel="stylesheet" href="/css/styles.css">

    <link rel="stylesheet" href="/js/datatables/datatables.net-dt/css/jquery.dataTables.css">
    <script src="/js/bootstrap/js/orginalCol.js"></script>
    <script src="/js/Scripts.js"></script>
    <title>@yield('title')</title>
  </head>

 <body>
     <header>
     <nav class="navbar navbar-expand-lg bg-body-tertiary">
     <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a href="/" class="navbar-brand">
         <img src="/icons/adicionar_usuario.png" alt="HDC EVENTS">
    </a>
      <a class="navbar-brand" href="#">Eventos</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/events/create">Criar Eventos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Entrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/produtos">Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contato">Contato</a>
        </li>
      </ul>
    </div>
  </nav>
    </header>
   @yield('content')
    <footer>Direitos reservados</footer>

  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">


<!-- conteudo a ser renderizado -->
         </main> <!-- FECHAMENTO MAIN -->
       </div> <!--  div row da container-fluid   -->


    </div> <!-- container-fluid -->


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="/js/jquery/jquery/dist/jquery.min.js"></script>
      <script src="/js/popper/@popperjs/core/dist/umd/popper-base.min.js"> </script>
      <script src="/js/datatables/datatables.net/js/jquery.dataTables.min.js"> </script>
      <script src="/js/datatables/buttons/dataTables.buttons.min.js"> </script>
      <script src="/js/datatables/buttons/jszip.min.js"> </script>
      <script src="/js/datatables/buttons/pdfmake.min.js"> </script>
      <script src="/js/datatables/buttons/vfs_fonts.js"> </script>
      <script src="/js/datatables/buttons/buttons.html5.min.js"> </script>
      <script src="/js/datatables/buttons/buttons.html5.min.js"> </script>
      <script src="/js/bootstrap/js/bootstrap.min.js"> </script>
      <script src="/js/bootstrap/js/bootstrap.bundle.js"> </script>
 </body>
</html>
