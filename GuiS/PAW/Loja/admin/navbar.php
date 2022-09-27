<nav class="navbar bg-dark navbar-expand-sm p-3 navbar-dark">

  <a href="index.php" class="navbar-brand fs-2 p-0" style="color:crimson;">Lojaaaaaaa</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

    <div class="container-fluid">
      <ul class="navbar-nav nav justify-content-end">
        <li class="nav-item"><a href="relatorio.php" class="nav-link text-white fs-5">Relatório</a></li>
        <li class="nav-item"><a href="admin.php" class="nav-link text-white fs-5">Administradores</a></li>
        <li class="nav-item"><a href="categorias.php" class="nav-link text-white fs-5">Categorias</a></li>
        <li class="nav-item"><a href="produtos.php" class="nav-link text-white fs-5">Produtos</a></li>
        <li class="nav-item"><a href="login.php" class="nav-link text-white fs-5">Login</a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link text-white fs-5">Logout</a></li>
        <?php 
          if ($_SESSION["nome"]) {
        ?> 
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><?= $_SESSION["nome"] ?></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="logout.php">Sair</a></li>
            </ul>
          </li>
        <?php } ?>
      </ul>
    </div>

  </div>
</nav>