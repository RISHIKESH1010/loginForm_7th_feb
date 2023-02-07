<div class="card">
    <div class="card-body">
<form method ="post" action ="<?= base_url("login"); ?>">

<h1>Login Page</h1>

   <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input name="email" required type="email" class="form-control" id="email" placeholder="name@example.com"
         value="<?php if(isset($_COOKIE['emailcookie'])) echo $_COOKIE['emailcookie'];?>">
   </div>

    <div class="mb-3">
         <label for="password" class="form-label">Password</label>
         <input name="password" required type="password" class="form-control" id="password" placeholder="password"
         value="<?php if(isset($_COOKIE['passcookie'])) echo $_COOKIE['passcookie'];?>">
         <!--<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>-->
    </div>

    <div class="mb-3">
    <input type="checkbox" id="remember" name="remember" value="1">
         <label for="remember" >Remember me</label>       
    </div>


    <div class="mb-3"> <input type="submit" name="loginbutton" value="login1" class="btn btn-primary" /></div>

</form>
</div>
</div>


<?php 
//$getemail = get_cookie('email');

// if((get_cookie('email')))
// {
//      $getemail = get_cookie('email');
    

//      echo "<script>
//      {
//           document.getElementById('email').value='$getemail';
         
//           </script>";

//      }
?>



