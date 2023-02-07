<!--
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

-->

<link href="<?= base_url("public/css/bootstrap.min.css"); ?>" rel="stylesheet">
<script src="<?= base_url("public/js/bootstrap.bundle.min.js"); ?>"> </script>



<?php if(!session('user')) : ?>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LoginSystem</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url("register"); ?>">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= site_url("login"); ?>">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php endif; ?>


<!-- 
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= site_url(); ?>"><h2>Home</h2></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= site_url("register"); ?>"><h2>LogOut</h2></a>
        </li>
      </ul>
    </div>
  </div>
</nav> -->