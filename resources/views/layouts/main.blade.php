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
     <nav class="navbar navbar-expand-lg">
     <div class="container-fluid">

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
          <a class="nav-link" href="/produtos">Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contato">Contato</a>
        </li>
        @auth
        <li class="nav-item">
          <form action="/logout" method="post">
           @csrf
          <a href="/logout" class="nav-link" onclick="event.preventDefault();this.closest('form').submit();">Sair</a></form>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dashboard">Meus Eventos</a>
        </li>
        @endauth
        @guest
        <li class="nav-item">
          <a class="nav-link" href="/register">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login">Entrar</a>
        </li>
        @endguest
      </ul>
    </div>
  </nav>
    </header>
   <main>
     <div class="class-containet-fluid">
        <div class="row">
            @if (session('msg'))
            <p class="class-msg">
                {{ session('msg') }}
              </p>
            @endif
        </div>
     </div>

            <!-- conteudo a ser renderizado -->
         </main> <!-- FECHAMENTO MAIN -->
       </div> <!--  div row da container-fluid   -->


    </div> <!-- container-fluid -->
    @yield('content')
    <footer>Direitos reservados</footer>
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
