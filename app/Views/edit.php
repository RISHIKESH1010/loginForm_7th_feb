<div class="card">
    <div class="card-body">
<form method ="post" action ="<?= base_url("Update"); ?>">

<h1>Edit Here</h1>

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input name="name" required type="text" class="form-control" id="name" value=<?= session('user')->name ;?>>
   </div>

   <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input name="email" required type="email" class="form-control" id="email" value=<?= session('user')->email ; ?>>
   </div>

    <div class="mb-3">
         <label for="password" class="form-label">Mobile Number</label>
         <input name="mobile" required type="number" class="form-control" id="mobile" value=<?= session('user')->mobile; ?>>
    </div>

    <div class="mb-3"> <input type="submit" value="Update" class="btn btn-primary" /></div>

</form>
</div>
</div>