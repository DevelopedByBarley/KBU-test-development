<?php $csrf = $params['csrf'] ?? null ?>




<nav class="navbar navbar-expand-lg border-bottom fixed-top pr-font bg-main-gray  py-3" id="navbar">
  <div>
    <a class="navbar-brand" href="/">
      <img src="/public/assets/images/icons/logo.png" class="img-fluid w-75" alt="">
    </a>
    <button class="navbar-toggler border-gray-400 mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars text-dark text-2xl"></i> </button>
  </div>

  <div class="w-100">
    <div class="collapse navbar-collapse px-3  d-xl-flex align-items-center justify-content-end" id="navbarSupportedContent">
      <?php if (isset($_SESSION['userId'])) : ?>
        <div class="btn-group dropstart">
          <div class="dropdown">
            <button class="btn  dropdown-toggle p-1 " type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="/public/assets/uploads/images/1.png" class="avatar img-fluid rounded-circle" style="height: 30px; width: 30px;" alt="">
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              <li>
                <form action="/user/logout" class="px-5" method="POST">
                  <?= $csrf->generate() ?>
                  <button class="btn btn-danger " type="submit">Logout</button>
                </form>
              </li>
            </ul>
          </div>


        </div>
      <?php else : ?>
        <ul class="navbar-nav  mb-2 mb-lg-0">
          <li class="nav-item ">
            <a class="nav-link main-blue  mx-lg-3" href="/">MENEKÜLÉSI ÚTVONAL</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link main-blue  mx-lg-3" href="/">HELYSZÍNTÉRKÉP</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link main-blue  mx-lg-3" href="/">PONTOZÁS</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link main-blue  mx-lg-3" href="/">JELENTKEZÉS</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link main-blue " href="/">IMPRESSZUM</a>
          </li>
        </ul>
        <div class="d-flex  align-items-center justify-content-center  p-xl-3  mx-xl-5 mb-1">

          <div class="form-check form-switch">
            <input class="form-check-input text-2xl " type="checkbox" role="switch" id="theme-toggle">
          </div>
          <i class="fa-regular fa-moon text-3xl text-dark"></i>
        </div>

      <?php endif ?>
    </div>
  </div>
</nav>