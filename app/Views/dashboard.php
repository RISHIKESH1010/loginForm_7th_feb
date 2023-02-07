<link href="<?= base_url("public/css/bootstrap.min.css"); ?>" rel="stylesheet">
<script src="<?= base_url("public/js/bootstrap.bundle.min.js"); ?>"> </script>

 

<?php if(session('user')) : ?>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= site_url(); ?>">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= site_url("logout"); ?>">LogOut</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php endif; ?>





<h2> Welcome, <?= session('user')->name ; ?> 
. You have login successfully</h2>

<div class="card">
    <div class="card-body">

       <form action ="<?= base_url('Update/update/'.session('user')->id) ?>"  method ="POST">   
      
      <input type="hidden" name="_method" value="PUT" />
    

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input name="name"  type="text" class="form-control" id="name" value=<?= session('user')->name ; ?>>
   </div>
      
   <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input name="email"  type="email" class="form-control" id="email" value=<?= session('user')->email ; ?> >
   </div>

    <div class="mb-3">
         <label for="password" class="form-label">Mobile Number</label>
         <input name="mobile"  type="number" class="form-control" id="mobile" value=<?= session('user')->mobile; ?>>
    </div>


    <div class="mb-3"> <button type="submit"  class="btn btn-primary" >Update</button></div>
    </form>
</div>
</div>








<!--
<div class="card">
    <div class="card-body">
<form method ="post" action ="// base_url(""); ?>">

    <div class="mb-3"> <input type="submit" value="Home" class="btn btn-primary" /></div>

    <div class="mb-3"> <input type="submit" value="logout" class="btn btn-primary" /></div>

    <li class="nav-item">
          <a class="nav-link" href=" //site_url("register"); ?>">LogOut</a>
        </li>

</form>
</div>
</div>
-->






